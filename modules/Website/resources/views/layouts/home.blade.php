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
                @include('Website::parts.header')
                @include('Website::parts.nav')
              @show
              @yield('main')
              @section('footer')  
                @include('Website::parts.footer')
              @show
             
              @section('modal')  
                @include('Website::parts.modal')
              @show                           
       
        @yield('js')
    </body>
</html>
  