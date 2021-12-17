<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics | @yield('page-title', 'comics') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
        <!-- Custom CSS -->
        @yield('custom-css')

    </head>
    <body>

        @include('partials.header')
        <!-- site header -->

        <main id="site_main">
            @yield('content')
        </main>
        <!-- /#site_main -->


        @include('partials.footer')
        <!-- site footer -->


        <!-- custom SCRIPT -->
        @yield('custom-js')

    </body>
</html>
