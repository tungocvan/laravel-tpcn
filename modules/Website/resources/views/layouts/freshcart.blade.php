<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Favicon icon-->
        <title>@yield('title')</title>
        <!-- Libs CSS -->
        @yield('css')
    </head>
    <body>        
              @yield('header')
              @yield('main')
              @yield('footer')                       
       
        @yield('js')
    </body>
</html>
  