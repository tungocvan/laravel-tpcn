<?php

namespace App\Http\Controllers\Phoenix;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WpUser;
use App\Models\WpUserMeta;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PhoenixUserController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');

    }
    public function index()
    {
        $uri = 'users.user';
        $users = WpUser::paginate($perPage = 50, $columns = ['*'])->fragment('users');

        return view('phoenix', ['content' => $uri, 'users' => $users, 'active' => 'user']);
    }
    public function getbyId($id)
    {
        $user = WpUser::find($id)->getAttributes();
        // $serialized = serialize($user);
        // dd($serialized) ;
        $uri = 'users.infoUser';
        $usersMeta = WpUserMeta::where('user_id', $id)->get();
        $infoUser = [];
        $filters = ['billing_company', 'billing_email', 'billing_phone', 'billing_address_1'];

        foreach ($usersMeta as $item) {
            foreach ($filters as $filter) {
                if ($item['meta_key'] == $filter) {
                    $infoUser[$filter] = $item['meta_value'];
                }
            }
        }
        //dd($user + $infoUser);
        return view('phoenix', ['content' => $uri, 'user' => $user + $infoUser]);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'username' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //     ],[
    //         'username.required' => 'Tên bắt buộc phải nhập',
    //         'username.string' => 'Tên nhập không hợp lệ',
    //         'email.required' => 'Email bắt buộc phải nhập',
    //         'email.email' => 'Email không hợp lệ',
    //         'password.required' => 'Mật khẩu bắt buộc phải nhập',
    //         'password.min' => 'Mật khẩu ít nhất :min ký tự',
    //         'password.confirmed' => 'Mật khẩu xác thực không khớp'
    //     ]);
    // }

    public function create(Request $request)
    {
        // $user = 'a:1:{s:13:"administrator";b:1;}';
        // $serialized = unserialize($user);
        // dd($serialized) ;
        $method = $request->method();
        if ($method == 'POST') {
            //dd(request()->username);
            $request->validate(
                [
                    'username' => 'required|min:2',
                    'email' => 'required|email',
                    'password' => 'required|min:6',
                ],
                [
                    'username.min' => 'username ít nhất :min ký tự',
                    'username.required' => 'username buộc phải nhập',
                    'email.required' => 'email buộc phải nhập',
                    'email.email' => 'Email không hợp lệ',
                    'password.required' => 'Mật khẩu bắt buộc phải nhập',
                    'password.min' => 'Mật khẩu ít nhất :min ký tự',
                ]
            );

            // dd($request->request);
            $user = new WpUser();
            $user->user_login = $request->input('username');
            $user->user_email = $request->input('email');
            $user->user_nicename = $request->input('username');
            $user->display_name = $request->input('firstname') . ' ' . $request->input('lastname');
            $user->user_url = $request->input('website');
            $user->user_status = 0;
            $user->user_registered = date('Y-m-d H:i:s');
            $user->user_pass = md5($request->input('password'));
            $user->save();

            if ($user->id) {
                $usermeta = new WpUserMeta();
                $usermeta->user_id = $user->id;
                $usermeta->meta_key = 'wp_capabilities';
                $usermeta->meta_value = serialize([$request->input('role') => true]);
                $usermeta->save();
                $usermeta = new WpUserMeta();
                $usermeta->user_id = $user->id;
                $usermeta->meta_key = 'first_name';
                $usermeta->meta_value = $request->input('firstname');
                $usermeta->save();
                $usermeta = new WpUserMeta();
                $usermeta->user_id = $user->id;
                $usermeta->meta_key = 'last_name';
                $usermeta->meta_value = $request->input('lastname');
                $usermeta->save();
            }

            return redirect()->route('user-show', $user->id);
        }
        $uri = 'users.create';
        return view('phoenix', ['content' => $uri, 'active' => 'create']);
    }
}
