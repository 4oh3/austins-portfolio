
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
Expand Projects Section on Any Skill Click
- - - - - - - - - - - - - - - - - - - - - - */

$('.skill-box').click(function(){
    $('.project-container').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $(".project-container").offset().top
        }, 750);
});

$('.projects').click(function(){
    $('#projects').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $("#projects").offset().top
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
Close Mobile Nav on <li> Click
- - - - - - - - - - - - - - - - - - - - - - */

$('.mobile-menu').click(function() {
    $('input[type=”checkbox”]').toggle();
    console.log('CLCIKED!');
});
