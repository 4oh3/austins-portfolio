@extends('layouts.app')

@section('top-hero')
<section class="hero-container">
    @endsection

    <!-- @if(session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
    @endif -->

    @section('bottom-hero')
    <div class="hero-text wrapper">
        <h1>Austin Smith</h1>
        <p>Level web developer with a keen motivation for intuitive and functional implementations. Broadly
            knowledgable in full stack web development from concept to completion.</p>
    </div>
</section>
@endsection

@section('content')
<div class="skill-container wrapper" id="projects">
    <div class="skill-text">
        <h1>My Skills</h1>
        <p>Go ahead, click one!
            <br>These are a show of some of the technologies that were focused on during my course at SAIT. Click one
            to view a project I've done with the corresponding technology.</p>
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
            <div class="project-title">HTML / CSS Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box css">
            <div class="project-title">CSS / HTML Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box sass">
            <div class="project-title">SASS Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box javascript">
            <div class="project-title">JavaScript Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box php">
            <div class="project-title">PHP Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box mysql">
            <div class="project-title">MySQL Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box wordpress">
            <div class="project-title">WordPress Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box jquery">
            <div class="project-title">JQuery Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
        <div class="project-box bootstrap">
            <div class="project-title">Bootstrap Project</div>
            <div class="click-me">Click to view details.</div>
        </div>
    </div>
</div>

<section class="about-section" id="about">
    <div class="about-container wrapper">
        <div class="about-image">
            <img src="/images/portrait.png" alt="Cartoon Portrait">
        </div>
        <div class="about-text">
            <h1>About Me</h1>
            <p>
                <br>
                When I'm not doing web development related things you'll find me:
                <br>
                <br>
                <span class="about-button"><a href="https://www.instagram.com/okurasuclub/"><i class="fab fa-instagram fa-lg"></i></a></span>
                Developing My Small Brand <span class="about-button"><a href="https://www.okurasu.club/"><i class="fas fa-shopping-cart"></i></a></span>
                <br>
                <br>
                <span class="about-button"><a href="https://www.instagram.com/4oh3/"><i class="fab fa-instagram fa-lg"></i></a></span>
                Taking Pictures
                <br>
                <br>
                <span class="about-button"><a href="https://www.youtube.com/channel/UCxVCrkin6pVwVwR3RZWg4GQ"><i class="fab fa-youtube fa-lg"></i></a></span>
                Making Videos
                <br>
                <br>
                Click any of the icons to see my latest work!
            </p>
        </div>
    </div>
</section>

<section class="contact-container" id="contact">

    <div class="contact-form wrapper">



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
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea type="text" class="form-control luna-message" id="message" name="message" required></textarea>
                </div>

                @if(session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
                @endif

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Send">Send</button>
                    <button class="btn btn-danger" type="button" name="button" value="Rather email me directly?"
                        onclick="window.location.href='mailto:austinsmiht@gmail.com'">Rather email me directly?</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="map-container">
    <div id="map"></div>
</section>
@endsection