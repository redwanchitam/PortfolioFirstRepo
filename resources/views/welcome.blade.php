<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
    <div id="main">
        <nav class="sticky-top navbar navbar-expand-sm navbar-dark">
            <ul class="w-100 d-flex navbar-nav align-items-center">
                <li class="nav-item mr-auto">
                    <router-link to="/" class="logo navLink">Redwan CHITAM</router-link>
                </li>
                <li class="nav-item ">
                    <router-link to="/whoAmI" class="navLink">Who am i</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/projects" class="navLink">projects</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/contactMe" class="navLink">Get in touch</router-link>
                </li>
            </ul>
        </nav>
        <div class="py-4 container">
            <router-view></router-view>
            @yield('projectDetails')
        </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
