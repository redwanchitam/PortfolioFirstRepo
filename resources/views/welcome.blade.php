<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
    <div id="main">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="row navbar-nav justify-content-center">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/whoAmI" class="nav-link">Who am i</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/gallery" class="nav-link">Gallery</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/contactMe" class="nav-link">Contact Me</router-link>
                </li>
            </ul>
        </nav>
        <div class="container">
            <router-view></router-view>
        </div>
     </div>
     <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
