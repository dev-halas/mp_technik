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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(8);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_styles_scss__WEBPACK_IMPORTED_MODULE_0__);
//import Swiper from 'swiper';

__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);
__webpack_require__(6);
__webpack_require__(9);

__webpack_require__(7);





/***/ }),
/* 1 */
/***/ (function(module, exports) {

const header = document.querySelector('.header')
const hamburger = document.querySelector('.hamburger')

hamburger.addEventListener('click', () => {
    header.classList.toggle('--active')
})

/***/ }),
/* 2 */
/***/ (function(module, exports) {

const swiper = new Swiper('.heroSlider', {
    loop: true,
    speed: 500,
    allowTouchMove: true,
    /*autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    */
    
    //change default css classes 
    wrapperClass: 'heroSlider--wrapper',
    slideClass: 'homeSlider--slide',


    // Navigation arrows
    navigation: {
        nextEl: '.homeSlide--next',
        prevEl: '.homeSlide--prev',
    },
});



/***/ }),
/* 3 */
/***/ (function(module, exports) {

const searchBarButton = document.querySelector('.headerShop--searchIcon')
const searchBar = document.querySelector('.searchBar')
const closeSearchBar = document.querySelector('.dgwt-wcas-preloader')
const searchInput = document.querySelector('.dgwt-wcas-search-input')


searchBarButton.addEventListener('click', () => {
    searchBar.classList.toggle('--show')
    searchInput.select()
})

closeSearchBar.addEventListener('click', () => {
    searchBar.classList.remove('--show')
})

/***/ }),
/* 4 */
/***/ (function(module, exports) {

const headerBasket = document.querySelector('.headerShop--basket')
const basketSidebar = document.querySelector('.basketSidebar--sidebar')
const basketSidebarBackground = document.querySelector('.basketSidebar--bg')
const closeSidebar = document.querySelector('.basketSidebar--close')

headerBasket.addEventListener('click', () => {
    basketSidebar.classList.toggle('--open');
    basketSidebarBackground.classList.toggle('--open');
})

closeSidebar.addEventListener('click', () => {
    basketSidebar.classList.toggle('--open');
    basketSidebarBackground.classList.toggle('--open');
})

basketSidebarBackground.addEventListener('click', () => {
    basketSidebar.classList.toggle('--open');
    basketSidebarBackground.classList.toggle('--open');
})

/***/ }),
/* 5 */
/***/ (function(module, exports) {

const productTabs = document.querySelector('.productTabs')

if(productTabs !== null) {
    console.log('works')

    const productTabHeader = document.querySelectorAll('.productTab--header')
    console.log(productTabHeader);

    const productTabContent = document.querySelectorAll('.productTab--content')
    console.log(productTabContent)

    productTabHeader.forEach((header, index) => {
        header.addEventListener('click', () => {
            
            productTabHeader.forEach(e => {
                e.classList.remove('--active');
            })

            productTabContent.forEach(e => {
                e.classList.remove('--active');
            })

            header.classList.add('--active')
            productTabContent[index].classList.add('--active')

        })
    })
}

/***/ }),
/* 6 */
/***/ (function(module, exports) {

/*const filterButton = document.querySelector('.productFilter--button')
const filters = document.querySelector('.shopSidebar')

filterButton.addEventListener('click', () => {
    filters.classList.toggle('--open')
})
*/

/***/ }),
/* 7 */
/***/ (function(module, exports) {


const productQuantity = () => {

    const qtyInputs = document.querySelectorAll('.qtyInput')
    const qtyInc = document.querySelectorAll('.qtyInc')
    const qtyDec = document.querySelectorAll('.qtyDec')
    const buttonUpdate = document.querySelector('[name="update_cart"]');

    qtyInc.forEach((inc, index) => {
        inc.addEventListener('click', () => {
            qtyInputs[index].value++
            buttonUpdate ? buttonUpdate.removeAttribute('disabled') : null
        })
    })

    qtyDec.forEach((dec, index) => {
        dec.addEventListener('click', () => {
            qtyInputs[index].value--
            qtyInputs[index].value < 1 ? qtyInputs[index].value = 0 : qtyInputs[index].value
            buttonUpdate ? buttonUpdate.removeAttribute('disabled') : null
        })
    })

}

productQuantity()

jQuery(document.body).on('updated_cart_totals removed_from_cart', () => {
    productQuantity()
});





/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 9 */
/***/ (function(module, exports) {

const swiper = new Swiper('.logoCarousel', {
    loop: true,
    grabCursor: false,
    speed: 4000,
    allowTouchMove: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    spaceBetween: 30,

    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        960: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1300: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});



/***/ })
/******/ ]);