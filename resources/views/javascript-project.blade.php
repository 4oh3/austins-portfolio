@extends('layouts.app')

    @section('top-hero')
        <section class="hero-container-project">
    @endsection

    @section('bottom-hero')
            <div class="hero-text-project wrapper">
                <h3>Technolgy Used:</h3>
                <ul>
                    <li>- HTML</li>
                    <li>- CSS</li>
                    <li>- JavaScript (JQuery)</li>
                    <li>- Bootstrap</li>
                </ul>
                <h3>Objective:</h3>
                <p>Create a "Functioning Microwave" following this criteria</p>
                <ul>
                    <li>- Start button that starts the countdown</li>
                    <li>- Cancel button that stops the countdown</li>
                    <li>- Clear button that resets the display</li>
                    <li>- Buttons for all numbers, including 0</li>
                    <li>- Include relevant / helpful comments</li>
                    <li>- When timer is up, blink 'Done' 3 times</li>
                    <li>- Make it function like a normal microwave!</li>
                </ul>
                <h3>Challenges:</h3>
                <p>Working as a team (allocating certain tasks)</p>
                <ul>
                    <li class="hvr-pulse-grow"><a href="https://bitbucket.org/4oh3/microwave-assignment/src/master/">{ View on BitBucket }</a></li>
                </ul>
            </div>
            <div class="project-image">
                <img src="/images/jquery-project.jpg" alt="JavaScript / JQuery Project Screenshot">
            </div>
        </section>
    @endsection

@section('content')

@endsection
