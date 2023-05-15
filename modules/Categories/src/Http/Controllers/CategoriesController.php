<?php

namespace modules\Categories\src\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Categories\src\Models\Categories;
use Modules\Categories\src\Models\Taxonomy;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware("auth");
    }
    public function index()
    {
        // $categoiries = Categories::all();
        // $category = [];
        // foreach ($categoiries as $key => $item) {
        //     if()
        // }

        $category = [];
        $Taxonomy = Taxonomy::where('taxonomy', '=', 'product_cat')->get();
        //dd($Taxonomy);
        foreach ($Taxonomy as $key => $item) {
            $itemTaxomo = Taxonomy::find($item->term_id)->category;
            $itemTaxomo['parent'] = $item->parent;
            $itemTaxomo['count'] = $item->count;
            array_push($category, $itemTaxomo);
        }
        echo getCategories($category);

        // foreach ($category as $key => $item) {
        //     echo $item->term_id .
        //         '-' .
        //         $item->name .
        //         '-' .
        //         $item->slug .
        //         '-' .
        //         $item->parent .
        //         '-' .
        //         $item->count .
        //         '<br/>';
        // }
        // dd($category);
        return view('Categories::categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories::categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('Categories::categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Categories::categories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Categories::categories');
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
        return view('Categories::categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('Categories::categories');
    }
}
