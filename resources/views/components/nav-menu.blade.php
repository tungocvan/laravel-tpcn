@php 
    $itemsMenu1 = ['name' => 'Account', 'href' => '#','subMenu' => [
            ['name' => 'Sign in', 'href' => '#'],
            ['name' => 'Sign up', 'href' => '#'],
            ['name' => 'My Account', 'href' => '#','subMenu' =>[
                ['name' => 'Orders', 'href' => '#'],
                ['name' => 'Settings', 'href' => '#']
            ]]
        ]];
    $itemsMenu2 = ['name' => 'Home', 'href' => '#','subMenu' => [
            ['name' => 'Sign in', 'href' => '#'],
            ['name' => 'Sign up', 'href' => '#'],
            ['name' => 'My Account', 'href' => '#','subMenu' =>[
                ['name' => 'Orders', 'href' => '#'],
                ['name' => 'Settings', 'href' => '#']
            ]]
        ]];
    $itemsMenu3 = ['name' => 'Product', 'href' => '#','subMenu' => [
            ['name' => 'Sign in', 'href' => '#'],
            ['name' => 'Sign up', 'href' => '#'],            
        ]];
@endphp
<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <x-package-nav-menu-item :itemsMenu="$itemsMenu1" />
    </li>
    <li class="nav-item dropdown">
        <x-package-nav-menu-item :itemsMenu="$itemsMenu2" />
    </li>
    <li class="nav-item dropdown">
        <x-package-nav-menu-item :itemsMenu="$itemsMenu3" />
    </li>
   
    <li class="nav-item dropdown dropdown-fullwidth">
        <x-package-nav-menu-mega />
    </li>
    
</ul>
