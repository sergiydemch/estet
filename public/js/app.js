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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 36);
/******/ })
/************************************************************************/
/******/ ({

/***/ 36:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(37);


/***/ }),

/***/ 37:
/***/ (function(module, exports) {

$(document).ready(function () {
    // $('.dropdown-toggle').dropdown();

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.itg-tabs-slick1').slick("setPosition", 0);
        $('.itg-tabs-slick2').slick("setPosition", 0);
        $('.itg-tabs-slick3').slick("setPosition", 0);
        $('.itg-tabs-slick4').slick("setPosition", 0);
    });

    // $('.itg-main-tabs .nav-tabs li a').on('click', function () {
    //     console.log('hhh');
    // });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<i class="fa fa-chevron-right"><span>fa</span></i>',
        prevArrow: '<i class="fa fa-chevron-left"><span>fa</span></i>',
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
        // autoplay: true
    });

    /// tabs slider

    $('.itg-tabs-slick1, .itg-tabs-slick2, .itg-tabs-slick3, .itg-tabs-slick4').slick({
        nextArrow: '<i class="fa fa-chevron-right"><span>fa</span></i>',
        prevArrow: '<i class="fa fa-chevron-left"><span>fa</span></i>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        }]
    });

    $('.manufactories-inner').slick({
        nextArrow: '<i class="fa fa-chevron-right"><span>fa</span></i>',
        prevArrow: '<i class="fa fa-chevron-left"><span>fa</span></i>',
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        }]
    });

    /**  spoiler **/

    // spoiler

    $('.read-more-spoiler').on('click', function () {
        $('.spoiler-inner').removeClass('spoiler-inner-hidden');
        $('.read-more-spoiler-span').addClass('display-hidden');
        $('.read-more-spoiler-close').removeClass('display-hidden');
    });

    $('.read-more-spoiler-close').on('click', function () {
        $(this).addClass('display-hidden');
        $('.spoiler-inner').addClass('spoiler-inner-hidden');
        $('.read-more-spoiler').removeClass('display-hidden');
    });

    /**  end spoiler **/
});

/***/ })

/******/ });