<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://kit.fontawesome.com/f5ade48764.js" crossorigin="anonymous"></script>
        {{-- <script src="https://github.com/darkskyapp/skycons/blob/master/skycons.js"></script> --}}
        <!-- Fonts -->
       <link rel="stylesheet" href="/css/app.css">
        <!-- Styles -->

    </head>
    <body>
    <div id="app">
 
           <weather-app></weather-app>

    </div>
 

    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
