<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Austin Smith - Portfolio</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|PT+Sans+Narrow:400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/hover.css">
</head>
<body>

    @yield('top-hero')

        <nav class="mobile-nav">
            <div class="mobile-nav-toggle">
                <input class="toggle" type="checkbox"/>
                {{-- Hamburger Menu --}}
                <span></span>
                <span></span>
                <span></span>
                {{-- Hamburger Menu --}}
                <ul class="mobile-menu">
                    <a href="/"><li>Home</li></a>
                    <a class="projects" href="http://austintsmith.ca/#projects"><li>Projects</li></a>
                    <a class="about" href="http://austintsmith.ca/#about"><li>About</li></a>
                    <a class="contact" href="http://austintsmith.ca/#contact"><li>Contact</li></a>
                    <span></span>
                    <a href="https://www.instagram.com/4oh3/"><li><i class="fab fa-instagram fa-lg"></i>Instagram</li></a>
                    <a href="http://linkedin.com/in/austinsmiht/"><li><i class="fab fa-linkedin fa-lg"></i>Linkedin</li></a>
                    <a href="https://github.com/4oh3"><li><i class="fab fa-github fa-lg"></i>Github</li></a>
                    <a href="https://bitbucket.org/4oh3/"><li><i class="fab fa-bitbucket fa-lg"></i>BitBucket</li></a>
                </ul>
            </div>
        </nav>

        <nav class="desktop-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a class="projects" href="http://austintsmith.ca/#projects">Projects</a></li>
                <li><a class="about" href="http://austintsmith.ca/#about">About</a></li>
                <li><a class="contact" href="http://austintsmith.ca/#contact">Contact</a></li>
            </ul>
            <ul>
                <li><a href="https://www.instagram.com/4oh3/"><i class="fab fa-instagram fa-lg"></i></a></li>
                <li><a href="http://linkedin.com/in/austinsmiht/"><i class="fab fa-linkedin fa-lg"></i></a></li>
                <li><a href="https://github.com/4oh3"><i class="fab fa-github fa-lg"></i></a></li>
                <li><a href="https://bitbucket.org/4oh3/"><i class="fab fa-bitbucket fa-lg"></i></a></li>
            </ul>
        </nav>

    @yield('bottom-hero')

    @yield('content')

        <!-- - - - - - - - - - - - - - - Scripts - - - - - - - - - - - - - - -->

        <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDReZovdgRSEeRtGtFcucwQldMm_JhDbBk&callback=initMap"
        type="text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                ]) !!};
            </script>

            <script src="/js/app.js"></script>
        </body>
        </html>

        <?php // TODO: Run through spell checker ?>
