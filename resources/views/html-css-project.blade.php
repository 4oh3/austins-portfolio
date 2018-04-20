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
        <section class="hero-container">
    @endsection

    @section('bottom-hero')
            <div class="hero-text wrapper">
                <h3>Technolgy Used:</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Bootstrap</li>
                    <li></li>
                </ul>
                <h3>Objective</h3>
                <p>Create a "Four Page Website" following this criteria:</p>
                <ul>
                    <li>4 pages: Home, About, Products, Contact.</li>
                    <li>Home page should be a summary of the company or product</li>
                    <li>About page should be either a description of the company, or employee bio</li>
                    <li>Products page should have a list of products</li>
                    <li>Contact page should have an email input and a text area for comments, and a submit button (this does not need to be hooked up to a backend server)</li>
                    <li>Nav should include a Logo</li>
                    <li>All links should work</li>
                    <li>Include Hero section</li>
                    <li>Include Footer with social icons</li>
                    <li>Site should be responsive</li>
                    <li>Site should have a mobile menu</li>
                </ul>
            </div>
        </section>
    @endsection

@section('content')

@endsection
