@extends('layouts.app')

    @section('top-hero')
        <section class="hero-container-project">
    @endsection

    @section('bottom-hero')
            <div class="hero-text-project wrapper">
                <h3>Technolgy Used:</h3>
                <ul>
                    <li>- HTML</li>
                    <li>- CSS / SASS</li>
                    <li>- Bootstrap</li>
                    <li>- PHP (Laravel)</li>
                    <li>- MySQL</li>
                    <li>- XAMPP (Apache)</li>
                </ul>
                <h3>Objective:</h3>
                <p>Create a "Web App Remaking a Website (facebook, reddit, etc.)" following this criteria</p>
                <ul>
                    <li>- Style as closely as possible to current website design</li>
                    <li>- Organize markup into appropriate views ('partials')</li>
                    <li>- Pass data from a controller into the view</li>
                    <li>- Log in / out functionality</li>
                    <li>- When logged in user should be able to:</li>
                    <li>- Read content of all users</li>
                    <li>- Add content</li>
                    <li>- Validation on forms</li>
                    <li>- Click link to users specific posts</li>
                    <li>- Add comment</li>
                    <li>- Like / Unlike content</li>
                </ul>
                <h3>Challenges:</h3>
                <p>Completion of requirements in tight timeframe</p>
                <ul>
                    <li class="hvr-pulse-grow"><a href="https://bitbucket.org/4oh3/wbdv-winter-2018-php-austin-smith/src/master/assignment-1/">{ View on BitBucket }</a></li>
                    <li class="hvr-pulse-grow"><a href="http://18.232.93.132/">{ View Live Site }</a></li>
                </ul>
            </div>
            <div class="project-image">
                <img src="/images/php-mysql-project.jpg" alt="PHP and MySQL Project Screenshot">
            </div>
        </section>
    @endsection

@section('content')

@endsection
