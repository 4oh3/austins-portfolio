<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>Austin Smith - Portfolio</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|PT+Sans+Narrow:400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/hover.css">
</head>
<body>

    <section class="hero-container">
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
                    <a class="projects" href="#projects"><li>Projects</li></a>
                    <a href="#"><li>About</li></a>
                    <a href="#"><li>Contact</li></a>
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
                <li><a class="projects" href="#projects">Projects</a></li>
                <li><a href="#">About</a></li>
                <li><a class="contact" href="#contact">Contact</a></li>
            </ul>
            <ul>
                <li><a href="https://www.instagram.com/4oh3/"><i class="fab fa-instagram fa-lg"></i></a></li>
                <li><a href="http://linkedin.com/in/austinsmiht/"><i class="fab fa-linkedin fa-lg"></i></a></li>
                <li><a href="https://github.com/4oh3"><i class="fab fa-github fa-lg"></i></a></li>
                <li><a href="https://bitbucket.org/4oh3/"><i class="fab fa-bitbucket fa-lg"></i></a></li>
            </ul>
        </nav>
        <div class="hero-text wrapper">
            <h1>Austin Smith</h1>
            <p>Junior level web developer with a keen motivation for intuitive and functional implementations. Broadly knowledgably in full stack web development from concept to completion.</p>
        </div>
    </section>

    <div class="skill-container wrapper" id="projects">
        <div class="skill-text">
            <h1>My Skills</h1>
            <p>Go ahead, click one!
                <br>These are a show of some of the technologies that were focused on during my course at SAIT. Click one to view a project I've done with the corresponding technology.</p>
            </div>
            <div class="skill-grid">
                <div id="html" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fab fa-html5 fa-4x"></i>
                            <h2>HTML5</h2>
                        </div>
                    </div>
                </div>
                <div id="css" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <i class="fab fa-css3-alt fa-4x"></i>
                        <div class="caption">
                            <h2>CSS</h2>
                        </div>
                    </div>
                </div>
                <div id="sass" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fab fa-sass fa-4x"></i>
                            <h2>SASS</h2>
                        </div>
                    </div>
                </div>
                <div id="javascript" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fab fa-js fa-4x"></i>
                            <h2>JavaScript</h2>
                        </div>
                    </div>
                </div>
                <div id="php" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fab fa-php fa-4x"></i>
                            <h2>PHP</h2>
                        </div>
                    </div>
                </div>
                <div id="mysql" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fas fa-database fa-4x"></i>
                            <h2>MySQL</h2>
                        </div>
                    </div>
                </div>
                <div id="wordpress" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fab fa-wordpress-simple fa-4x"></i>
                            <h2>WordPress</h2>
                        </div>
                    </div>
                </div>
                <div id="jquery" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fas fa-book fa-4x"></i>
                            <h2>Libraries</h2>
                            <h3>- JQuery</h3>
                        </div>
                    </div>
                </div>
                <div id="bootstrap" class="skill-box hvr-bob hvr-sweep-to-top">
                    <div class="inner-box">
                        <div class="caption">
                            <i class="fas fa-cogs fa-4x"></i>
                            <h2>Frameworks</h2>
                            <h3>- Bootstrap</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-container">
            <div id="project" class="project wrapper">
                <div class="project-box html">
                    <div class="project-title">HTML / CSS Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box css">
                    <div class="project-title">CSS / HTML Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box sass">
                    <div class="project-title">SASS Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box javascript">
                    <div class="project-title">JavaScript Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box php">
                    <div class="project-title">PHP Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box mysql">
                    <div class="project-title">MySql Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box wordpress">
                    <div class="project-title">WordPress Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box jquery">
                    <div class="project-title">JQuery Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
                <div class="project-box bootstrap">
                    <div class="project-title">Bootstrap Assignment</div>
                    <div class="click-me">Click to view details.</div>
                </div>
            </div>
        </div>

        <?php // TODO: Fix memory of alert alert-warning? ?>

        <section class="contact-container" id="contact">
            <div class="contact-form wrapper">

                @if(session('message'))
                    <div class='alert alert-success'>
                        {{ session('message') }}
                    </div>
                @endif

                <div class="col-12 col-md-12">

                    <h1>Let's get in touch!</h1>
                    <h4>Send me a message with any inquiries you have.</h4>

                    <form class="form-horizontal" method="POST" action="/contact">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="text" class="form-control" id="email" name="email" required>
                            {{-- <small class="form-text">Rather email me directly? – austinsmiht@gmail.com</small> --}}
                        </div>

                        <div class="form-group">
                            <label for="message">Message: </label>
                            <textarea type="text" class="form-control luna-message" id="message" name="message" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" value="Send">Send</button>

                            <button class="btn btn-default" type="button" name="button" value="Rather email me directly?" onclick="window.location.href='mailto:austinsmiht@gmail.com'" >Rather email me directly?</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    <section class="map-section">
        {{-- <div class="google-map"> --}}
            <div id="map"></div>
        {{-- </div> --}}
    </section>
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
