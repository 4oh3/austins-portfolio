@extends('layouts.app')

    @section('top-hero')
        <section class="hero-container-project">
    @endsection

    @section('bottom-hero')
            <div class="hero-text-project wrapper">
                <h3>Technolgy Used:</h3>
                <ul>
                    <li>- HTML</li>
                    <li>- SASS / CSS</li>
                    <li>- JavaScript</li>
                    <li>- Bootstrap</li>
                    <li>- NPM for compiling SASS to CSS</li>
                </ul>
                <h3>Objective:</h3>
                <p>Create a "Blog" following this criteria</p>
                <ul>
                    <li>- 3 pages: Blog List, Blog, About</li>
                    <li>- Footer with social icons</li>
                    <li>- Utilize SASS variables</li>
                    <li>- Nest SASS styles based on component</li>
                    <li>- Seperate SASS files for UI components</li>
                    <li>- Utilize a mixin</li>
                    <li>- Code free of merge conflicts</li>
                    <li>- Responsive design</li>
                    <li>- Host on AWS</li>
                </ul>
                <h3>Challenges:</h3>
                <p>Working on a team (with GitHub)</p>
                <ul>
                    <li class="hvr-pulse-grow"><a href="https://github.com/4oh3/ASKA-Sass-Assignment">{ View on GitHub }</a></li>
                </ul>
            </div>
            <div class="project-image">
                <img src="/images/sass-project.jpg" alt="SASS Project Screenshot">
            </div>
        </section>
    @endsection

@section('content')

@endsection
