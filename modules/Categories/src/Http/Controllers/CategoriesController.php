<?php

namespace modules\Categories\src\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Categories\src\Models\Categories;
use Modules\Categories\src\Models\Taxonomy;
use Modules\Posts\src\Models\Posts;
use Corcel\Model\Menu;
use Corcel\Model\Post;
use Corcel\Model\Meta\PostMeta;

//use Corcel\Model\Term;
// use Illuminate\Support\Facades\DB;

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
        // product_cat // category // nav_menu
        $Taxonomy = Taxonomy::where('taxonomy', '=', 'nav_menu')->get();
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
    public function checkSubMenu($id)
    {
        $post = Post::find($id);
        $metaValue = $post->meta
            ->where('meta_key', '_menu_item_menu_item_parent')
            ->pluck('meta_value')
            ->first();
        return $metaValue;
    }
    public function getMenu(Request $request)
    {
        $menus = Menu::slug('menu-van')->first()->items;
        // dd($menus);
        foreach ($menus as $item) {
            //$type = $item->instance()->type ?? '';
            $id = $item->instance()->ID ?? '';
            $url = $item->instance()->url ?? '';
            $title = $item->instance()->title ?? ''; // if it's a Post
            $idParent = $this->checkSubMenu($id);
            if ($title != '' && $idParent == 0) {
                echo '<a href=/' . $url . '>' . $title . '</a><br />';
            } else {
                echo '------' . '<a href=/' . $url . '>' . $title . '</a><br />';
            }

            // echo $item->instance()->name ?? ''; // if it's a Term
            //  echo $item->instance()->link_text ?? ''; // if it's a custom link
        }
        //dd($menus);
        // $menuItems = Posts::where('post_type', 'nav_menu_item')
        //     ->orderBy('menu_order', 'asc')
        //     ->get();
        // dd($menuItems);
        // foreach ($menuItems as $menuItem) {
        //     $title = $menuItem->post_title;
        //     echo $title . '<br />';
        //     // $url = $menuItem->guid;
        //     // $post_parent = $menuItem->post_parent;
        //     // if ($post_parent == 0) {
        //     //     echo $title . '<br />';
        //     // }
        // }
        //return view('Categories::categories');
    }

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
