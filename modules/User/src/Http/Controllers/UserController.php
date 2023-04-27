<?php

namespace Modules\User\src\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\User\src\Models\WpUserMeta;

class UserController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index(Request $request){
          $user_meta = WpUserMeta::all();
          dd($user_meta);
          return view('User::list');        
    }
   
}
