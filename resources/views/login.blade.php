<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS 
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/night-mode.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/framework.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> 

        <!-- icons
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">


        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
            <login></login>
        </div>

        <script>var BASE_URL = '{{ URL::to('/') }}';</script>
        <!-- javaScripts
        ================================================== -->
        <script src="{{ asset('assets/js/framework.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    </body>
</html>
