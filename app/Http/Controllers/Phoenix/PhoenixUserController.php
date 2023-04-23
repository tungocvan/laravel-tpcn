<?php

namespace App\Http\Controllers\Phoenix;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WpUser;
use App\Models\WpUserMeta;
use DB;

class PhoenixUserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        
        $uri = 'users.user';
        $users = WpUser::paginate(
            $perPage = 50 ,
            $columns = ['*'] 
        )->fragment('users'); 
        
        return view('phoenix',['content'=>$uri ,'users' => $users]);
    }
    public function getbyId($id)
    {
        $user = WpUser::find($id)->getAttributes();        
        // $serialized = serialize($user);      
        // dd($serialized) ;
        $uri = 'users.infoUser';        
        $usersMeta = WpUserMeta::where('user_id',$id)->get();        
        $infoUser = [];
        $filters = ['billing_company','billing_email','billing_phone','billing_address_1'];
        
        foreach($usersMeta as $item) {
          foreach($filters as $filter){
            if($item['meta_key'] == $filter){                          
                $infoUser[$filter] = $item['meta_value']; 
            }
          }
        }
        //dd($user + $infoUser);
        return view('phoenix',['content'=>$uri,'user' => $user + $infoUser]);
    }
}
