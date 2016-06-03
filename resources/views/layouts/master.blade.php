<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>@yield('title')</title>
        @include('layouts.linker')
    </head>
    <body ng-app="mainApp">
        @include('includes.header')
        <div class="container">
            @yield('carouselGestion')
            @yield('carousel')
        </div>
        @yield('content')
        @include('layouts.script')
    </body>
</html>





