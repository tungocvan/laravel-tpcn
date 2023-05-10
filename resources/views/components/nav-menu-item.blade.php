@php     
    $subMenu = $itemsMenu['subMenu'] ?? null;    
    $name = $itemsMenu['name'] ?? '';    
@endphp
<a class="nav-link dropdown-toggle" href="{{ $name }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    {{ $name }}
</a>
@if ($subMenu)           
    <ul class="dropdown-menu">
        @foreach ($subMenu as $item)
            @php $subMenuChild = $item['subMenu'] ?? null; @endphp
            @if ($subMenuChild)
                <li class="dropdown-submenu dropend">
                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="{{$item['href']}}">
                        {{$item['name']}}
                    </a>    
                <ul class="dropdown-menu">
                @foreach ($item['subMenu'] as $itemChild)   
                     <li><a class="dropdown-item" href="{{$itemChild['href']}}">{{$itemChild['name']}}</a></li>    
                @endforeach
                </ul>
                </li>
            @else
                <li><a class="dropdown-item" href="{{$item['href']}}">{{$item['name']}}</a></li>
            @endif
        @endforeach
    </ul>
@endif

