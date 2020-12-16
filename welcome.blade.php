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
        <nav class="sticky-top navbar navbar-expand-lg">
            <router-link to="/" id="home" class="logo navLink">Redwan CHITAM</router-link>
            <button id="menu" class="navbar-toggler tagButton navLink" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span>V</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item nav-link">
                        <router-link id="whoAmI" to="/whoAmI" class="navLink">
                          <ul class="list-group list-group-flush tagList align-items-center">
                            <li class="tagItem">Who am i</li> 
                            <li class="w-100 dotItem"><span class="dot"></span></li> 
                          </ul>
                        </router-link>
                    </li>
                    <li class="nav-item nav-link">
                        <router-link id="projects" to="/projects" class="navLink">
                          <ul class="list-group list-group-flush tagList align-items-center">
                            <li class="tagItem">projects</li>
                            <li class="w-100 dotItem"><span class="dot"></span></li>
                          </ul>
                        </router-link>
                    </li>
                    <li class="nav-item nav-link">
                        <router-link id="contactMe" to="/contactMe" class="navLink">
                          <ul class="list-group list-group-flush tagList align-items-center">
                            <li class="tagItem">Get in touch</li>
                            <li class="w-100 dotItem"><span class="dot"></span></li>
                          </ul>
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="py-4 container">
            <router-view></router-view>
            @yield('projectDetails')
        </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
