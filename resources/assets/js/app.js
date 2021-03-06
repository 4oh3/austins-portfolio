
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

// require('./bootstrap');
//
// window.Vue = require('vue');

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

//  //  //  //  //  //  My JS  //  //  //  //  //  //

/* - - - - - - - - - - - - - - - - - - - - - -
Google Maps
- - - - - - - - - - - - - - - - - - - - - - */

function initMap() {
    var location = {
        lat: 51.048615,
        lng: -114.070846
    }

    var options = {
        zoom: 12,
        center: location,
        styles: [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "lightness": "-100"
                    },
                    {
                        "gamma": "0.00"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": "10"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "lightness": "-3"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "weight": "4.56"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "gamma": "0.40"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "gamma": "0.75"
                    },
                    {
                        "lightness": "-15"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "lightness": "44"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#0d47a1"
                    }
                ]
            }
        ]

    }

    var map = new google.maps.Map(document.getElementById('map'), options);

    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}

/* - - - - - - - - - - - - - - - - - - - - - -
General / Cleanups
- - - - - - - - - - - - - - - - - - - - - - */

$(document).ready(function(){
    initMap();
});

window.initMap = initMap;

/* - - - - - - - - - - - - - - - - - - - - - -
Expand Projects Section on Any Skill Click
- - - - - - - - - - - - - - - - - - - - - - */

$('.skill-box').click(function(){
    $('.project-container').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $(".project-container").offset().top-180
    }, 750);
});

/* - - - - - - - - - - - - - - - - - - - - - -
Show Project Relevant to Skill Clicked
- - - - - - - - - - - - - - - - - - - - - - */

$('.skill-box').click(function() {
    var $element = $('.' + this.id).fadeIn(500);
    $('#project > div').not($element).hide();
});

/* - - - - - - - - - - - - - - - - - - - - - -
Close Mobile Nav on <li> Click, Off Nav Click, Scroll + On Document Load
- - - - - - - - - - - - - - - - - - - - - - */

function uncheckCheckbox() {
    $('.toggle').prop('checked', false);
}

$(document).ready(function() {
    uncheckCheckbox();
});

$('.mobile-menu, .skill-container').click(function() {
    uncheckCheckbox();
});

$(document).scroll(function() {
    uncheckCheckbox();
});

/* - - - - - - - - - - - - - - - - - - - - - -
Animate Scrolling when Link is Clicked
- - - - - - - - - - - - - - - - - - - - - - */

$('.projects').click(function(){
    $('#projects').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $("#projects").offset().top-75
    }, 750);
});

$('.contact').click(function(){
    $('#contact').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $("#contact").offset().top-75
    }, 750);
});

$('.about').click(function(){
    $('#about').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $('#about').offset().top-75
    }, 750);
});

// TODO: Make above into a function that takes an argument / parameter? - it's repeated 3+ times.

/* - - - - - - - - - - - - - - - - - - - - - -
Remove / Add Title & Click Me Text & Background on hover / unhover
- - - - - - - - - - - - - - - - - - - - - - */

$('.project-box').mouseenter(function(){
    $('.project-title, .click-me').fadeOut('fast');
});

$('.project-box').mouseleave(function(){
    $('.project-title, .click-me').fadeIn('fast');
});

// TODO: Remove background-color (slowly) on mouseenter & vise versa on mouseleave

// TODO: Stop hover event from continualy firing

$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
        $(".desktop-nav").css("background", "#0d47a1");
    }
    else {
        $(".desktop-nav").css("background", "");
    }
})

/* - - - - - - - - - - - - - - - - - - - - - -
Click on Specific Project goes to Specific Project Page
- - - - - - - - - - - - - - - - - - - - - - */

$('.html').click(function(){
    window.location = "http://18.204.81.85/html-css-project";
});

$('.css').click(function(){
    window.location = "http://18.204.81.85/html-css-project";
});

$('.sass').click(function(){
    window.location = "http://18.204.81.85/sass-project";
});

$('.javascript').click(function(){
    window.location = "http://18.204.81.85/javascript-project";
});

$('.php').click(function(){
    window.location = "http://18.204.81.85/php-mysql-project";
});

$('.mysql').click(function(){
    window.location = "http://18.204.81.85/php-mysql-project";
});

$('.wordpress').click(function(){
    window.location = "http://18.204.81.85/wordpress-project";
});

$('.jquery').click(function(){
    window.location = "http://18.204.81.85/javascript-project";
});

$('.bootstrap').click(function(){
    window.location = "http://18.204.81.85/html-css-project";
});