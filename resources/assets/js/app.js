
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
        center: location
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

// TODO: Scroll to top on reload - FIX CHROME

$(document).ready(function(){
    $(this).scrollTop(0);
    initMap();
});

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
        scrollTop: $("#contact").offset().top
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
