<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('page_name') </title>

        <!-- Styles -->
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <script src=" {{ asset('js/app.js') }} "></script>
    </head>

    <body>
        
        @include('partials/_header')
        
        @yield('page_content')

        
        
        @yield('additional_js')

    </body>
</html>
