<?php

namespace modules\Posts\src\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Posts\src\Models\Posts;
use DataTables;

class PostsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPost = Posts::paginate($perPage = 10, $columns = ['*'])->fragment('posts');
        $itemsPost = $allPost->items();
        $lastPage = $allPost->lastPage();
        $currentPage = $allPost->currentPage();
        //dd($allPost);
        return view('Posts::posts', ['posts' => $itemsPost, 'lastPage' => $lastPage, 'currentPage' => $currentPage]);
    }
    public function data()
    {
        //$allPost = Posts::paginate($perPage = 10, $columns = ['ID', 'post_title', 'post_status', 'post_type']);
        $allPost = Posts::select(['ID', 'post_title', 'post_status', 'post_type']);
        return DataTables::eloquent($allPost)
        ->addColumn('edit', function($allPost) {
            return "<a href='#{$allPost->ID}' class='btn btn-primary'>Sửa</a>";
        })
        ->addColumn('delete', function($allPost) {
            return "<a href='#{$allPost->ID}' class='btn btn-danger'>Xóa</a>";
        })
        ->orderColumn('edit', false)
        ->orderColumn('delete', true)
        ->rawColumns(['edit','delete'])
        ->toJson();
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Posts::posts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('Posts::posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Posts::posts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Posts::edit',['id' => $id]);
        
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
        return view('Posts::posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('Posts::posts');
    }
}
