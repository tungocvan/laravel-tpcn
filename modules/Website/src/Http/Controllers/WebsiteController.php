<?php

namespace modules\Website\src\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Website\src\Models\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     * xxx                                       x
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware("auth");
    }
    public function index()
    {
        return view('Website::website');
    }
    public function freshcart()
    {
        return view('Website::freshcart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Website::website');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'username' => 'required|min:2',
                'email' => 'required|email',
            ],
            [
                'username.min' => 'username ít nhất :min ký tự',
                'username.required' => 'username buộc phải nhập',
                'email.required' => 'email buộc phải nhập',
                'email.email' => 'Email không hợp lệ',
            ]
        );
        //$selectedRoles = $request->input('select', []);
        //$selectedRoles = is_array($selectedRoles) ? $selectedRoles : [$selectedRoles];
        dd($request);
        return view('Website::freshcart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Website::website');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Website::website');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('Website::website');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('Website::website');
    }
}
