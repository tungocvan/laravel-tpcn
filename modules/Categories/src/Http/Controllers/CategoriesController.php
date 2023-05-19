<?php

namespace modules\Categories\src\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Categories\src\Models\Categories;
use Modules\Categories\src\Models\Taxonomy;
//use Corcel\Model\Term;

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
        $Taxonomy = Taxonomy::where('taxonomy', '=', 'category')->get();
        //dd($Taxonomy);
        foreach ($Taxonomy as $key => $item) {
            $itemTaxomo = Taxonomy::find($item->term_id)->category;
            $itemTaxomo['parent'] = $item->parent;
            $itemTaxomo['count'] = $item->count;
            array_push($category, $itemTaxomo);
        }

        // $options = getCategoriesOptions($category);
        // dd($options);
        return view('Categories::categories', ['category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentSlug = 'abc';
        $parentIdSlug = Categories::where('slug', $parentSlug)->first()->term_id ?? 0;

        $slug = 'abc-1';
        $name = 'abc 1';

        $category = Categories::create([
            'name' => $name,
            'slug' => $slug,
        ]);

        $categoryIdSlug = Categories::where('slug', $slug)->first()->term_id;

        $taxonomy = Taxonomy::create([
            'term_id' => $categoryIdSlug,
            'taxonomy' => 'category',
            'parent' => $parentIdSlug,
            'description' => 'abc description',
            'count' => 0,
        ]);

        return view('Categories::add');
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
