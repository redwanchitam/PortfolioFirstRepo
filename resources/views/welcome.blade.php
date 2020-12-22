<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styleProjectDetails.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styleProjects.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styleWhoAmI.css') }}">
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
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js" integrity="sha512-RvUydNGlqYJapy0t4AH8hDv/It+zKsv4wOQGb+iOnEfa6NnF2fzjXgRy+FDjSpMfC3sjokNUzsfYZaZ8QAwIxg==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js" integrity="sha512-5/OHwmQzDSBS0Ous4/hlYoWLHd06/d2r7LdKZQVBXOA6PvOqWVXtdboiLTU7lQTGyVoKVTNkwi0ol4gHGlw5ww==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js" integrity="sha512-pvDW4tehKKsohH97164HwKwRGFpzayEFWTVbk8HuUoLIQ7Jp+WLN5XYokVuoCj2aT6dy8ihbW8SRTG1k0W4mSQ==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js" integrity="sha512-I0VFyPo7hdM7YrEbQ0pvX4bX2904k0+B19u/xBrPrQoMprfcSnIDfGFD8kP52GbAhwtDjkEVhXlQvj8+vkJyew==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js" integrity="sha512-ocsFo48WU8Xq6Y1Lwi7psXRAujG9E4TKNR4q1DbrKzaaxOMTEoao/a+mDoB+cYzY4lwbyxvqjkp/ZA1/MNlfsg==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js" integrity="sha512-plyexAULVlTExvDn2yUZFJV9F8q+53MC/GpU9dEuNGXmrrI3J8Rcffjvxg3OOBALBvF+UILPLIBEoCeF2maqTQ==" crossorigin="anonymous"></script>
     
     <script src="{{ asset('js/app.js') }}"></script>

     
    </body>
</html>
