@extends('layouts.app')

    {{-- <section class="project-section" id="about">
        <div class="project-page-container wrapper">
            <div class="project-image">
                <img src="/images/html-css-project.jpg" alt="">
            </div>
            <div class="project-text">
                <h1>About Me</h1>
                <p>
                Hey there!
                <br>
                    My name is Austin Smith. I am currently located in Calgary, Alberta — where I was born and raised.
                    <br>
                    I decided to have a passion in web development as it supports both my creative side as well as my technical side. I believe in clean, simple designs — with full functionality.
                    <br>
                    Since I like to have control of both these aspects, I enjoy working with full stack web development. Allowing me to bring a simple idea from concept to reality.
                </p>
            </div>
        </div>
    </section> --}}

    @section('top-hero')
        <section class="hero-container-project">
    @endsection

    @section('bottom-hero')
            <div class="hero-text-project wrapper">
                <h3>Technolgy Used:</h3>
                <ul>
                    <li>- HTML</li>
                    <li>- CSS</li>
                    <li>- JavaScript</li>
                    <li>- Bootstrap</li>
                </ul>
                <h3>Objective:</h3>
                <p>Create a "Four Page Website" following this criteria</p>
                <ul>
                    <li>- 4 pages: Home, About, Products, Contact</li>
                    <li>- Home Page: Summary of the company or product</li>
                    <li>- About Page: Either a description of the company, or employee bio</li>
                    <li>- Products Page: List of products</li>
                    <li>- Contact Page: Email input + text area for comments + submit button</li>
                    <li>- Nav should have a logo</li>
                    <li>- Hero section</li>
                    <li>- Footer with social icons</li>
                    <li>- Responsive w/ mobile menu</li>
                </ul>
                <ul>
                    <li class="hvr-pulse-grow"><a href="https://github.com/4oh3/Assignment-4-Four-Page-Website">{ View on GitHub }</a></li>
                </ul>
            </div>
            <div class="project-image">
                <img src="/images/html-css-project.jpg" alt="">
            </div>
        </section>
    @endsection

@section('content')

@endsection
