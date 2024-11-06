/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/arrow.js":
/*!**********************!*\
  !*** ./src/arrow.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\nvar arrow = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.timeline();\narrow.set(\".arrow-down\", {\n  visibility: \"visible\"\n});\narrow.from(\".reveal\", {\n  delay: 0.25,\n  opacity: 0,\n  y: -140,\n  ease: \"power4.out\",\n  duration: 1,\n  stagger: {\n    amount: 0.5\n  }\n});\narrow.to(\".arrow-down\", {\n  repeat: -1,\n  yoyo: true,\n  transform: \"translateY(-16px)\",\n  ease: \"power1.inOut\",\n  duration: 1.5\n});\n\n//# sourceURL=webpack://portfoliob/./src/arrow.js?");

/***/ }),

/***/ "./src/cursor.js":
/*!***********************!*\
  !*** ./src/cursor.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  var cursor = document.querySelector(\".cursor\");\n  var projects = document.getElementsByClassName(\"project\");\n  var filters = document.getElementsByClassName(\"filter\");\n  var links = document.querySelectorAll(\"a\");\n  var dropdowns = document.getElementsByClassName(\"code-dropdown\");\n  var emails = document.getElementsByClassName(\"email\");\n  var buttons = document.querySelectorAll(\"button\");\n  var skills = document.getElementsByClassName(\"skill\");\n  var iframes = document.querySelectorAll(\"iframe\");\n  var flickity = document.querySelector(\".flickity-viewport\");\n  gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.set(\".cursor\", {\n    xPercent: -50,\n    yPercent: -50\n  });\n  var xTo = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.quickTo(\".cursor\", \"x\", {\n    duration: 0.1,\n    ease: \"power3\"\n  });\n  var yTo = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.quickTo(\".cursor\", \"y\", {\n    duration: 0.1,\n    ease: \"power3\"\n  });\n  window.addEventListener(\"mousemove\", function (e) {\n    xTo(e.clientX);\n    yTo(e.clientY);\n    cursor.style.opacity = \"1\";\n  });\n  window.addEventListener(\"mousedown\", function () {\n    click.play();\n  });\n  window.addEventListener(\"mouseup\", function () {\n    click.reverse();\n  });\n  var click = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".cursor\", {\n    paused: true,\n    borderWidth: '4px',\n    duration: 0.1\n  });\n  var hover = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".cursor\", {\n    paused: true,\n    scale: 0.5,\n    duration: 0.1\n  });\n\n  // iterate through all elements and apply hover effect\n  var addHoverEffect = function addHoverEffect(elements) {\n    Array.from(elements).forEach(function (element) {\n      element.addEventListener(\"mouseenter\", function () {\n        hover.play();\n      });\n      element.addEventListener(\"mouseleave\", function () {\n        hover.reverse();\n      });\n    });\n  };\n\n  // apply hover effect to various elements\n  addHoverEffect(projects);\n  addHoverEffect(filters);\n  addHoverEffect(dropdowns);\n  addHoverEffect(emails);\n  addHoverEffect(buttons);\n  addHoverEffect(links);\n  addHoverEffect(skills);\n\n  // special cursor handling for iframes\n  iframes.forEach(function (iframe) {\n    iframe.addEventListener(\"mouseover\", function () {\n      cursor.style.display = \"none\";\n    });\n    iframe.addEventListener(\"mouseleave\", function () {\n      cursor.style.display = \"block\";\n    });\n  });\n\n  // hover effect for flickity\n  flickity.addEventListener(\"mouseenter\", function () {\n    hover.play();\n  });\n  flickity.addEventListener(\"mouseleave\", function () {\n    hover.reverse();\n  });\n});\n\n//# sourceURL=webpack://portfoliob/./src/cursor.js?");

/***/ }),

/***/ "./src/dropdown.js":
/*!*************************!*\
  !*** ./src/dropdown.js ***!
  \*************************/
/***/ (() => {

eval("var codes = document.getElementsByClassName(\"code-dropdown\");\nvar btn = document.getElementsByClassName(\"code-dropdown-btn\");\nvar carets = document.getElementsByClassName(\"caret\");\nvar _loop = function _loop(i) {\n  btn[i].addEventListener(\"click\", function () {\n    var code = codes[i];\n    var caret = carets[i];\n    if (code.style.maxHeight == \"\") {\n      code.style.maxHeight = \"2000px\";\n      caret.style.transform = \"rotate(180deg)\";\n    } else {\n      code.style.maxHeight = \"\";\n      code.style.overflow = \"hidden\";\n      caret.style.transform = \"rotate(0deg)\";\n    }\n  });\n};\nfor (var i = 0; i < btn.length; i++) {\n  _loop(i);\n}\n\n//# sourceURL=webpack://portfoliob/./src/dropdown.js?");

/***/ }),

/***/ "./src/filter.js":
/*!***********************!*\
  !*** ./src/filter.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! isotope-layout */ \"./node_modules/isotope-layout/js/isotope.js\");\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(isotope_layout__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! imagesloaded */ \"./node_modules/imagesloaded/imagesloaded.js\");\n/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(imagesloaded__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n// initialize isotope\nvar projects = document.querySelector('.project-cards');\nvar isotopeInstance = new (isotope_layout__WEBPACK_IMPORTED_MODULE_0___default())(projects, {\n  itemSelector: '.project',\n  transitionDuration: 0,\n  masonry: {\n    gutter: 16\n  },\n  hiddenStyle: {\n    opacity: 0\n  },\n  visibleStyle: {\n    opacity: 1\n  }\n});\n\n// trigger isotope layout after images are loaded\nimagesloaded__WEBPACK_IMPORTED_MODULE_1___default()(projects, function () {\n  isotopeInstance.layout();\n});\n\n// event listener for filter buttons\nvar filterButtons = document.querySelectorAll('.filter-button-group button');\nfilterButtons.forEach(function (button) {\n  button.addEventListener('click', function () {\n    var filterValue = this.getAttribute('data-filter');\n    isotopeInstance.arrange({\n      filter: filterValue\n    });\n  });\n});\n\n// handle button active state\nvar btns = document.querySelectorAll('.filter');\nfunction colorBtn() {\n  var _this = this;\n  btns.forEach(function (el) {\n    if (el !== _this) {\n      el.classList.remove('active');\n    }\n  });\n  this.classList.add('active');\n}\nbtns.forEach(function (faq) {\n  return faq.addEventListener('click', colorBtn);\n});\n\n//# sourceURL=webpack://portfoliob/./src/filter.js?");

/***/ }),

/***/ "./src/fitty.js":
/*!**********************!*\
  !*** ./src/fitty.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var fontfaceobserver__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! fontfaceobserver */ \"./node_modules/fontfaceobserver/fontfaceobserver.standalone.js\");\n/* harmony import */ var fontfaceobserver__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(fontfaceobserver__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var fitty__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! fitty */ \"./node_modules/fitty/dist/fitty.module.js\");\n\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  var font = new (fontfaceobserver__WEBPACK_IMPORTED_MODULE_0___default())('Rubik', {\n    weight: 500\n  });\n  (0,fitty__WEBPACK_IMPORTED_MODULE_1__[\"default\"])('#hero-name');\n  function redrawFitty() {\n    fitty__WEBPACK_IMPORTED_MODULE_1__[\"default\"].fitAll();\n  }\n  font.load(function () {\n    redrawFitty();\n  });\n});\n\n//# sourceURL=webpack://portfoliob/./src/fitty.js?");

/***/ }),

/***/ "./src/flickity.js":
/*!*************************!*\
  !*** ./src/flickity.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var flickity__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! flickity */ \"./node_modules/flickity/js/index.js\");\n/* harmony import */ var flickity__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(flickity__WEBPACK_IMPORTED_MODULE_0__);\n\n\n// initialize Flickity on the .about-carousel element\nvar aboutCarousel = document.querySelector('.about-carousel');\nvar flickityInstance = new (flickity__WEBPACK_IMPORTED_MODULE_0___default())(aboutCarousel, {\n  contain: true,\n  wrapAround: true,\n  pageDots: false,\n  autoPlay: true,\n  setGallerySize: false\n});\n\n//# sourceURL=webpack://portfoliob/./src/flickity.js?");

/***/ }),

/***/ "./src/footer.js":
/*!***********************!*\
  !*** ./src/footer.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! gsap/ScrollTrigger */ \"./node_modules/gsap/ScrollTrigger.js\");\n\n\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger);\nvar icons = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.timeline({\n  scrollTrigger: {\n    trigger: \".footer-content\",\n    start: \"bottom bottom\",\n    end: \"+=440\",\n    scrub: 1\n  }\n});\nicons.to(\".footer-icons\", {\n  delay: 5,\n  duration: 10,\n  transform: \"translateY(-128px)\",\n  ease: \"none\"\n});\nvar rotation = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.timeline({\n  repeat: -1\n});\nrotation.to(\".footer-icon\", {\n  rotation: \"360deg\",\n  ease: \"none\",\n  duration: 30\n});\nvar target = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.timeline({\n  repeat: -1\n});\ntarget.to(\"#target\", {\n  transform: \"translateY(16px)\",\n  ease: \"bounce\",\n  duration: 2\n});\ntarget.to(\"#target\", {\n  transform: \"translateY(-24px)\",\n  duration: 2\n});\n\n//# sourceURL=webpack://portfoliob/./src/footer.js?");

/***/ }),

/***/ "./src/hero.js":
/*!*********************!*\
  !*** ./src/hero.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\nvar hero = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.timeline();\nhero.set(\".hero-text\", {\n  visibility: \"visible\"\n});\nhero.set(\".arrow-down\", {\n  visibility: \"visible\"\n});\nhero.from(\".reveal\", {\n  delay: 0.25,\n  opacity: 0,\n  y: 140,\n  ease: \"power4.out\",\n  duration: 1,\n  stagger: {\n    amount: 0.5\n  }\n});\nhero.to(\".arrow-down\", {\n  repeat: -1,\n  yoyo: true,\n  transform: \"translateY(16px)\",\n  ease: \"power1.inOut\",\n  duration: 1.5\n});\n\n//# sourceURL=webpack://portfoliob/./src/hero.js?");

/***/ }),

/***/ "./src/lenis.js":
/*!**********************!*\
  !*** ./src/lenis.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var lenis__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lenis */ \"./node_modules/lenis/dist/lenis.mjs\");\n\nvar lenis = new lenis__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\nfunction raf(time) {\n  lenis.raf(time);\n  requestAnimationFrame(raf);\n}\nrequestAnimationFrame(raf);\n\n//# sourceURL=webpack://portfoliob/./src/lenis.js?");

/***/ }),

/***/ "./src/menu.js":
/*!*********************!*\
  !*** ./src/menu.js ***!
  \*********************/
/***/ (() => {

eval("var menu = document.querySelector('.nav-toggle');\nvar nav = document.querySelector('.nav-wrapper');\nvar icon = document.querySelector('.menu-icon');\nmenu.addEventListener('click', function () {\n  menu.classList.toggle(\"open\");\n  nav.classList.toggle('visible');\n  if (nav.classList.contains('visible')) {\n    icon.src = '../icons/ui/white-x.svg';\n  } else {\n    icon.src = '../icons/ui/white-menu.svg';\n  }\n});\n\n//# sourceURL=webpack://portfoliob/./src/menu.js?");

/***/ }),

/***/ "./src/modal.js":
/*!**********************!*\
  !*** ./src/modal.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var micromodal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! micromodal */ \"./node_modules/micromodal/dist/micromodal.es.js\");\n\nmicromodal__WEBPACK_IMPORTED_MODULE_0__[\"default\"].init();\n\n//# sourceURL=webpack://portfoliob/./src/modal.js?");

/***/ }),

/***/ "./src/reveal.js":
/*!***********************!*\
  !*** ./src/reveal.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var scrollreveal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! scrollreveal */ \"./node_modules/scrollreveal/dist/scrollreveal.es.js\");\n\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".intro\", {\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".more\", {\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\"main h2\", {\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\"main h1\", {\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".profile h1\", {\n  distance: '0px'\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".testimonial\", {\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0,\n  interval: 64\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".filter\", {\n  delay: 64,\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0,\n  interval: 64\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".view-toggle\", {\n  delay: 320,\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".project-cards\", {\n  delay: 128,\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0,\n  interval: 64\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".project-reveal\", {\n  delay: 128,\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0\n});\n(0,scrollreveal__WEBPACK_IMPORTED_MODULE_0__[\"default\"])().reveal(\".about-reveal\", {\n  distance: '150px',\n  ease: \"ease-in\",\n  opacity: 0,\n  interval: 128\n});\n\n//# sourceURL=webpack://portfoliob/./src/reveal.js?");

/***/ }),

/***/ "./src/tippy.js":
/*!**********************!*\
  !*** ./src/tippy.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var tippy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tippy.js */ \"./node_modules/tippy.js/dist/tippy.esm.js\");\n\n(0,tippy_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('.skill', {\n  placement: 'top'\n});\n(0,tippy_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('.code-dropdown-btn[data-tippy-content=\"code snippet!\"]', {\n  placement: 'top'\n});\n(0,tippy_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('#outdoors', {\n  content: \"<div style='display: grid; place-items: center; width: 100%; height: 100%; gap: 8px; padding: 4px 0px;'><img src='./media/tippy/outdoors.jpg' style='width: 100%; height: 100%; border-radius: 8px;'></div>\",\n  allowHTML: true,\n  placement: 'top'\n});\n(0,tippy_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('#concert', {\n  content: \"<div style='display: grid; place-items: center; width: 100%; height: 100%; gap: 8px; padding: 4px 0px;'><img src='./media/tippy/concert.jpg' style='width: 100%; height: 100%; border-radius: 8px;'></div>\",\n  allowHTML: true,\n  placement: 'top'\n});\n\n//# sourceURL=webpack://portfoliob/./src/tippy.js?");

/***/ }),

/***/ "./src/view.js":
/*!*********************!*\
  !*** ./src/view.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! isotope-layout */ \"./node_modules/isotope-layout/js/isotope.js\");\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(isotope_layout__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! imagesloaded */ \"./node_modules/imagesloaded/imagesloaded.js\");\n/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(imagesloaded__WEBPACK_IMPORTED_MODULE_1__);\n\n\nvar viewToggle = document.querySelector('.view-toggle');\nvar view = document.querySelector('.project-cards');\nviewToggle.addEventListener(\"click\", function () {\n  // reload isotope items and layout\n  imagesloaded__WEBPACK_IMPORTED_MODULE_1___default()(view, function () {\n    isotopeInstance.layout();\n  });\n\n  // toggle between grid and list views\n  view.classList.toggle('grid');\n  view.classList.toggle('list');\n\n  // reload Isotope items\n  isotopeInstance.reloadItems();\n  isotopeInstance.layout();\n\n  // toggle the list icon class on the button\n  viewToggle.classList.toggle('list-icon');\n});\n\n//# sourceURL=webpack://portfoliob/./src/view.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkportfoliob"] = self["webpackChunkportfoliob"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/arrow.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/cursor.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/dropdown.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/filter.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/fitty.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/flickity.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/footer.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/hero.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/lenis.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/menu.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/modal.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/reveal.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/tippy.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./src/view.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;