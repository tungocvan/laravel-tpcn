<?php

namespace App\Http\Controllers;
use Corcel\Model\Menu;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index(Request $request){  
        $menu = Menu::slug('HamadaMenuMain')->first();
        $menuName = $menu->name;
        $menuItems = $menu->items;
       // $customLinkUrl = $menuItems->where('type', 'custom')->first()->url;
        //$menu = Menu::where('slug', 'main-menu')->first();
        // foreach ($menuItems as $item) {
        //     // echo $item->instance()->title."\n"; // if it's a Post
        //     // echo $item->instance()->name."\n"; // if it's a Term
        //     // echo $item->instance()->link_text."\n"; // if it's a custom link
        //     echo $item->type;
        //     echo "<br />";
            
        // }
        dd($menuItems);
        $uri = 'settings.menuCategory';
        $data = ['status' => 'Menu'];
        return view('admin.layout',['action' => $uri,  'data' => $data]); 
    }
}
