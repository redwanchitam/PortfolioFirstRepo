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
            <ul class="w-100 d-flex navbar-nav">
                <li class="nav-item mr-auto">
                    <router-link to="/" class="nav-link">Redwan CHITAM</router-link>
                </li>
                <li class="nav-item ">
                    <router-link to="/whoAmI" class="nav-link">Who am i</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/projects" class="nav-link">projects</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/contactMe" class="nav-link">Get in touch</router-link>
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
