<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Favicon icon-->
        <title>@yield('title')</title>
        <!-- Libs CSS -->
        @yield('css')
    </head>
    <body>        
              @section('header')  
                @include('parts.custom.header')
                @include('parts.custom.nav')
              @show
              @yield('main')
              @section('footer')  
                @include('parts.custom.footer')
              @show
             
              @section('modal')  
                @include('parts.custom.modal')
              @show                           
       
        @yield('js')
    </body>
</html>
  