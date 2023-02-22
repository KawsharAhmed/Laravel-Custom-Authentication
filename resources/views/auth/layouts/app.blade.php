<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Styles -->
        <style>
                      .custom_bg{

background: #dddddd;
}
.registration_box {
padding: 10px 40px;
box-shadow: rgba(0,0,.5,#000);
border-radius: 5px;
box-shadow: 0,0,1,2,#000;
box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
}

.form-control:focus {
border-color: #3f51b5!important;
box-shadow: none!important;
}
        </style>
    </head>
    <body class="antialiased">
       
       @yield('content')
    </body>
</html>
