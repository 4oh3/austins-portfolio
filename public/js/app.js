/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ({

/***/ 11:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(12);
module.exports = __webpack_require__(43);


/***/ }),

/***/ 12:
/***/ (function(module, exports) {


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
General / Cleanups
- - - - - - - - - - - - - - - - - - - - - - */

// TODO: Scroll to top on reload - FIX CHROME

$(document).ready(function () {
    $(this).scrollTop(0);
});

/* - - - - - - - - - - - - - - - - - - - - - -
Expand Projects Section on Any Skill Click
- - - - - - - - - - - - - - - - - - - - - - */

$('.skill-box').click(function () {
    $('.project-container').fadeIn('slow');

    $('html, body').animate({
        scrollTop: $(".project-container").offset().top
    }, 750);
});

/* - - - - - - - - - - - - - - - - - - - - - -
Show Project Relevant to Skill Clicked
- - - - - - - - - - - - - - - - - - - - - - */

$('.skill-box').click(function () {
    var $element = $('.' + this.id).fadeIn(500);
    $('#project > div').not($element).hide();
});

/* - - - - - - - - - - - - - - - - - - - - - -
Close Mobile Nav on <li> Click, Off Nav Click, Scroll + On Document Load
- - - - - - - - - - - - - - - - - - - - - - */

function uncheckCheckbox() {
    $('.toggle').prop('checked', false);
}

$(document).ready(function () {
    uncheckCheckbox();
});

$('.mobile-menu, .skill-container').click(function () {
    uncheckCheckbox();
});

$(document).scroll(function () {
    uncheckCheckbox();
});

/* - - - - - - - - - - - - - - - - - - - - - -
Animate Scrolling when Link is Clicked
- - - - - - - - - - - - - - - - - - - - - - */

$('.projects').click(function () {
    $('#projects').fadeIn('slow');

    $('html, body').animate({ scrollTop: $("#projects").offset().top
    }, 750);
});

$('.contact').click(function () {
    $('#contact').fadeIn('slow');

    $('html, body').animate({ scrollTop: $("#contact").offset().top
    }, 750);
});

// TODO: Make above into a function that takes an argument / parameter? - it's repeated 3+ times.

/* - - - - - - - - - - - - - - - - - - - - - -
Remove / Add Title & Click Me Text & Background on hover / unhover
- - - - - - - - - - - - - - - - - - - - - - */

$('.project-box').mouseenter(function () {
    $('.project-title, .click-me').fadeOut('slow');
});

$('.project-box').mouseleave(function () {
    $('.project-title, .click-me').fadeIn('slow');
});

// TODO: Remove background-color (slowly) on mouseenter & vise versa on mouseleave

/***/ }),

/***/ 43:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });