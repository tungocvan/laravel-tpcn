<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavMenuItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $itemsMenu;
    public function __construct($itemsMenu)
    {
        //
        $this->itemsMenu = $itemsMenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-menu-item');
    }
}
