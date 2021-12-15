/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/components/cookie.js":
/*!*************************************!*\
  !*** ./src/js/components/cookie.js ***!
  \*************************************/
/***/ (() => {

eval("\n\n(function () {\n  var cookie = localStorage.getItem('hideCookieBanner');\n  var cookieAlert = document.querySelector('.cookie-alert');\n  var cookieBtn = document.querySelector('.cookie-alert__btn'); // if local storage key isn't found, set it to false\n\n  if (cookie === null) {\n    localStorage.setItem('hideCookieBanner', 'false');\n  } // If key is false or not set, show banner\n\n\n  if (cookie === 'false' || cookie === null) {\n    cookieAlert.classList.add('is-visible');\n  } // Hide banner and set local storage key on click\n\n\n  cookieBtn.addEventListener('click', function (event) {\n    localStorage.setItem('hideCookieBanner', 'true');\n    cookieAlert.classList.remove('is-visible');\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy9jb29raWUuanM/YzQxZiJdLCJuYW1lcyI6WyJjb29raWUiLCJsb2NhbFN0b3JhZ2UiLCJnZXRJdGVtIiwiY29va2llQWxlcnQiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJjb29raWVCdG4iLCJzZXRJdGVtIiwiY2xhc3NMaXN0IiwiYWRkIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50IiwicmVtb3ZlIl0sIm1hcHBpbmdzIjoiQUFBYTs7QUFFWixhQUFZO0FBRVosTUFBSUEsTUFBTSxHQUFHQyxZQUFZLENBQUNDLE9BQWIsQ0FBcUIsa0JBQXJCLENBQWI7QUFDQSxNQUFJQyxXQUFXLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixlQUF2QixDQUFsQjtBQUNBLE1BQUlDLFNBQVMsR0FBR0YsUUFBUSxDQUFDQyxhQUFULENBQXVCLG9CQUF2QixDQUFoQixDQUpZLENBTVo7O0FBQ0EsTUFBSUwsTUFBTSxLQUFLLElBQWYsRUFBcUI7QUFDcEJDLGdCQUFZLENBQUNNLE9BQWIsQ0FBcUIsa0JBQXJCLEVBQXlDLE9BQXpDO0FBQ0EsR0FUVyxDQVdaOzs7QUFDQSxNQUFJUCxNQUFNLEtBQUssT0FBWCxJQUFzQkEsTUFBTSxLQUFLLElBQXJDLEVBQTJDO0FBQzFDRyxlQUFXLENBQUNLLFNBQVosQ0FBc0JDLEdBQXRCLENBQTBCLFlBQTFCO0FBQ0EsR0FkVyxDQWdCWjs7O0FBQ0FILFdBQVMsQ0FBQ0ksZ0JBQVYsQ0FBMkIsT0FBM0IsRUFBb0MsVUFBVUMsS0FBVixFQUFpQjtBQUNwRFYsZ0JBQVksQ0FBQ00sT0FBYixDQUFxQixrQkFBckIsRUFBeUMsTUFBekM7QUFDQUosZUFBVyxDQUFDSyxTQUFaLENBQXNCSSxNQUF0QixDQUE2QixZQUE3QjtBQUNBLEdBSEQ7QUFLQSxDQXRCQSxHQUFEIiwiZmlsZSI6Ii4vc3JjL2pzL2NvbXBvbmVudHMvY29va2llLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG4oZnVuY3Rpb24gKCkge1xuXG5cdHZhciBjb29raWUgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSgnaGlkZUNvb2tpZUJhbm5lcicpO1xuXHR2YXIgY29va2llQWxlcnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuY29va2llLWFsZXJ0Jyk7XG5cdHZhciBjb29raWVCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuY29va2llLWFsZXJ0X19idG4nKTtcblxuXHQvLyBpZiBsb2NhbCBzdG9yYWdlIGtleSBpc24ndCBmb3VuZCwgc2V0IGl0IHRvIGZhbHNlXG5cdGlmIChjb29raWUgPT09IG51bGwpIHtcblx0XHRsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgnaGlkZUNvb2tpZUJhbm5lcicsICdmYWxzZScpO1xuXHR9XG5cblx0Ly8gSWYga2V5IGlzIGZhbHNlIG9yIG5vdCBzZXQsIHNob3cgYmFubmVyXG5cdGlmIChjb29raWUgPT09ICdmYWxzZScgfHwgY29va2llID09PSBudWxsKSB7XG5cdFx0Y29va2llQWxlcnQuY2xhc3NMaXN0LmFkZCgnaXMtdmlzaWJsZScpO1xuXHR9XG5cblx0Ly8gSGlkZSBiYW5uZXIgYW5kIHNldCBsb2NhbCBzdG9yYWdlIGtleSBvbiBjbGlja1xuXHRjb29raWVCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZXZlbnQpIHtcblx0XHRsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgnaGlkZUNvb2tpZUJhbm5lcicsICd0cnVlJyk7XG5cdFx0Y29va2llQWxlcnQuY2xhc3NMaXN0LnJlbW92ZSgnaXMtdmlzaWJsZScpO1xuXHR9KTtcblxufSgpKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/js/components/cookie.js\n");

/***/ }),

/***/ "./src/js/components/no-js.js":
/*!************************************!*\
  !*** ./src/js/components/no-js.js ***!
  \************************************/
/***/ (() => {

eval("\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  document.body.classList.remove(\"no-js\");\n  document.body.classList.add(\"js\");\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy9uby1qcy5qcz9lMzk5Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImJvZHkiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiXSwibWFwcGluZ3MiOiJBQUFhOztBQUViQSxRQUFRLENBQUNDLGdCQUFULENBQTBCLGtCQUExQixFQUE4QyxZQUFXO0FBQ3hERCxVQUFRLENBQUNFLElBQVQsQ0FBY0MsU0FBZCxDQUF3QkMsTUFBeEIsQ0FBK0IsT0FBL0I7QUFDQUosVUFBUSxDQUFDRSxJQUFULENBQWNDLFNBQWQsQ0FBd0JFLEdBQXhCLENBQTRCLElBQTVCO0FBQ0EsQ0FIRCIsImZpbGUiOiIuL3NyYy9qcy9jb21wb25lbnRzL25vLWpzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCBmdW5jdGlvbigpIHtcblx0ZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QucmVtb3ZlKFwibm8tanNcIik7XG5cdGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LmFkZChcImpzXCIpO1xufSk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/js/components/no-js.js\n");

/***/ }),

/***/ "./src/js/components/toggle.js":
/*!*************************************!*\
  !*** ./src/js/components/toggle.js ***!
  \*************************************/
/***/ (() => {

eval("\n/**\n * Toggle script that is useful for showing navigation, modals, etc.\n *\n * The following data attributes are supported:\n *\n * data-toggle\n * data-toggle-class\n * data-toggle-body-class\n */\n\n(function () {\n  var elements = document.querySelectorAll('[data-toggle]');\n\n  if (elements.length === 0) {\n    return false;\n  }\n\n  elements.forEach(function (element) {\n    var targetElement = document.querySelector(element.dataset.toggle);\n\n    if (!targetElement) {\n      return;\n    }\n\n    var bodyClass = element.dataset.toggleBodyClass;\n    var toggleClass = element.dataset.toggleClass || 'is-toggled';\n    element.addEventListener('click', function () {\n      var isToggled = element.classList.contains(toggleClass);\n      targetElement.classList.toggle(toggleClass);\n      element.classList.toggle(toggleClass);\n      element.setAttribute('aria-expanded', isToggled ? 'false' : 'true');\n      targetElement.setAttribute('aria-hidden', isToggled ? 'true' : 'false');\n\n      if (bodyClass) {\n        document.body.classList.toggle(bodyClass);\n      }\n    }, false);\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy90b2dnbGUuanM/OTVjMCJdLCJuYW1lcyI6WyJlbGVtZW50cyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImxlbmd0aCIsImZvckVhY2giLCJlbGVtZW50IiwidGFyZ2V0RWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJkYXRhc2V0IiwidG9nZ2xlIiwiYm9keUNsYXNzIiwidG9nZ2xlQm9keUNsYXNzIiwidG9nZ2xlQ2xhc3MiLCJhZGRFdmVudExpc3RlbmVyIiwiaXNUb2dnbGVkIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJzZXRBdHRyaWJ1dGUiLCJib2R5Il0sIm1hcHBpbmdzIjoiQUFBYTtBQUViO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQyxhQUFZO0FBQ1osTUFBTUEsUUFBUSxHQUFHQyxRQUFRLENBQUNDLGdCQUFULENBQTBCLGVBQTFCLENBQWpCOztBQUVBLE1BQUlGLFFBQVEsQ0FBQ0csTUFBVCxLQUFvQixDQUF4QixFQUEyQjtBQUMxQixXQUFPLEtBQVA7QUFDQTs7QUFFREgsVUFBUSxDQUFDSSxPQUFULENBQWlCLFVBQUFDLE9BQU8sRUFBSTtBQUMzQixRQUFNQyxhQUFhLEdBQUdMLFFBQVEsQ0FBQ00sYUFBVCxDQUF1QkYsT0FBTyxDQUFDRyxPQUFSLENBQWdCQyxNQUF2QyxDQUF0Qjs7QUFFQSxRQUFJLENBQUNILGFBQUwsRUFBb0I7QUFDbkI7QUFDQTs7QUFFRCxRQUFNSSxTQUFTLEdBQUdMLE9BQU8sQ0FBQ0csT0FBUixDQUFnQkcsZUFBbEM7QUFDQSxRQUFNQyxXQUFXLEdBQUdQLE9BQU8sQ0FBQ0csT0FBUixDQUFnQkksV0FBaEIsSUFBK0IsWUFBbkQ7QUFFQVAsV0FBTyxDQUFDUSxnQkFBUixDQUF5QixPQUF6QixFQUFrQyxZQUFNO0FBQ3ZDLFVBQU1DLFNBQVMsR0FBR1QsT0FBTyxDQUFDVSxTQUFSLENBQWtCQyxRQUFsQixDQUEyQkosV0FBM0IsQ0FBbEI7QUFDQU4sbUJBQWEsQ0FBQ1MsU0FBZCxDQUF3Qk4sTUFBeEIsQ0FBK0JHLFdBQS9CO0FBQ0FQLGFBQU8sQ0FBQ1UsU0FBUixDQUFrQk4sTUFBbEIsQ0FBeUJHLFdBQXpCO0FBRUFQLGFBQU8sQ0FBQ1ksWUFBUixDQUFxQixlQUFyQixFQUFzQ0gsU0FBUyxHQUFHLE9BQUgsR0FBYSxNQUE1RDtBQUNBUixtQkFBYSxDQUFDVyxZQUFkLENBQTJCLGFBQTNCLEVBQTBDSCxTQUFTLEdBQUcsTUFBSCxHQUFZLE9BQS9EOztBQUVBLFVBQUlKLFNBQUosRUFBZTtBQUNkVCxnQkFBUSxDQUFDaUIsSUFBVCxDQUFjSCxTQUFkLENBQXdCTixNQUF4QixDQUErQkMsU0FBL0I7QUFDQTtBQUNELEtBWEQsRUFXRyxLQVhIO0FBWUEsR0F0QkQ7QUF1QkEsQ0E5QkEsR0FBRCIsImZpbGUiOiIuL3NyYy9qcy9jb21wb25lbnRzL3RvZ2dsZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIid1c2Ugc3RyaWN0JztcblxuLyoqXG4gKiBUb2dnbGUgc2NyaXB0IHRoYXQgaXMgdXNlZnVsIGZvciBzaG93aW5nIG5hdmlnYXRpb24sIG1vZGFscywgZXRjLlxuICpcbiAqIFRoZSBmb2xsb3dpbmcgZGF0YSBhdHRyaWJ1dGVzIGFyZSBzdXBwb3J0ZWQ6XG4gKlxuICogZGF0YS10b2dnbGVcbiAqIGRhdGEtdG9nZ2xlLWNsYXNzXG4gKiBkYXRhLXRvZ2dsZS1ib2R5LWNsYXNzXG4gKi9cblxuKGZ1bmN0aW9uICgpIHtcblx0Y29uc3QgZWxlbWVudHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS10b2dnbGVdJyk7XG5cdFxuXHRpZiAoZWxlbWVudHMubGVuZ3RoID09PSAwKSB7XG5cdFx0cmV0dXJuIGZhbHNlO1xuXHR9XG5cdFxuXHRlbGVtZW50cy5mb3JFYWNoKGVsZW1lbnQgPT4ge1xuXHRcdGNvbnN0IHRhcmdldEVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGVsZW1lbnQuZGF0YXNldC50b2dnbGUpO1xuXHRcblx0XHRpZiAoIXRhcmdldEVsZW1lbnQpIHtcblx0XHRcdHJldHVybjtcblx0XHR9XG5cdFx0XG5cdFx0Y29uc3QgYm9keUNsYXNzID0gZWxlbWVudC5kYXRhc2V0LnRvZ2dsZUJvZHlDbGFzcztcblx0XHRjb25zdCB0b2dnbGVDbGFzcyA9IGVsZW1lbnQuZGF0YXNldC50b2dnbGVDbGFzcyB8fCAnaXMtdG9nZ2xlZCc7XG5cdFxuXHRcdGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XG5cdFx0XHRjb25zdCBpc1RvZ2dsZWQgPSBlbGVtZW50LmNsYXNzTGlzdC5jb250YWlucyh0b2dnbGVDbGFzcyk7XG5cdFx0XHR0YXJnZXRFbGVtZW50LmNsYXNzTGlzdC50b2dnbGUodG9nZ2xlQ2xhc3MpO1xuXHRcdFx0ZWxlbWVudC5jbGFzc0xpc3QudG9nZ2xlKHRvZ2dsZUNsYXNzKTtcblx0XHRcdFxuXHRcdFx0ZWxlbWVudC5zZXRBdHRyaWJ1dGUoJ2FyaWEtZXhwYW5kZWQnLCBpc1RvZ2dsZWQgPyAnZmFsc2UnIDogJ3RydWUnKTtcblx0XHRcdHRhcmdldEVsZW1lbnQuc2V0QXR0cmlidXRlKCdhcmlhLWhpZGRlbicsIGlzVG9nZ2xlZCA/ICd0cnVlJyA6ICdmYWxzZScpO1xuXHRcdFx0XG5cdFx0XHRpZiAoYm9keUNsYXNzKSB7XG5cdFx0XHRcdGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LnRvZ2dsZShib2R5Q2xhc3MpO1xuXHRcdFx0fVxuXHRcdH0sIGZhbHNlKTtcblx0fSk7XG59KCkpO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/components/toggle.js\n");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_no_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/no-js */ \"./src/js/components/no-js.js\");\n/* harmony import */ var _components_no_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_no_js__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _components_cookie__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/cookie */ \"./src/js/components/cookie.js\");\n/* harmony import */ var _components_cookie__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_cookie__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _components_toggle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/toggle */ \"./src/js/components/toggle.js\");\n/* harmony import */ var _components_toggle__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_toggle__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvc2NyaXB0cy5qcz9hMzA0Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7QUFBYTs7QUFFYjtBQUNBIiwiZmlsZSI6Ii4vc3JjL2pzL3NjcmlwdHMuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIndXNlIHN0cmljdCc7XG5cbmltcG9ydCAnLi9jb21wb25lbnRzL25vLWpzJztcbmltcG9ydCAnLi9jb21wb25lbnRzL2Nvb2tpZSc7XG5pbXBvcnQgJy4vY29tcG9uZW50cy90b2dnbGUnO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/scripts.js\n");

/***/ }),

/***/ "./src/styles/styles.scss":
/*!********************************!*\
  !*** ./src/styles/styles.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvc3R5bGVzL3N0eWxlcy5zY3NzP2E2ZjkiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IjtBQUFBIiwiZmlsZSI6Ii4vc3JjL3N0eWxlcy9zdHlsZXMuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/styles/styles.scss\n");

/***/ }),

/***/ "./src/styles/editor-style.scss":
/*!**************************************!*\
  !*** ./src/styles/editor-style.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvc3R5bGVzL2VkaXRvci1zdHlsZS5zY3NzPzNhM2MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IjtBQUFBIiwiZmlsZSI6Ii4vc3JjL3N0eWxlcy9lZGl0b3Itc3R5bGUuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/styles/editor-style.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/******/ 	// the startup function
/******/ 	// It's empty as some runtime module handles the default behavior
/******/ 	__webpack_require__.x = x => {};
/************************************************************************/
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
/******/ 		// Promise = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/scripts": 0
/******/ 		};
/******/ 		
/******/ 		var deferredModules = [
/******/ 			["./src/js/scripts.js"],
/******/ 			["./src/styles/styles.scss"],
/******/ 			["./src/styles/editor-style.scss"]
/******/ 		];
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
/******/ 		var checkDeferredModules = x => {};
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime, executeModules] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0, resolves = [];
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					resolves.push(installedChunks[chunkId][0]);
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			while(resolves.length) {
/******/ 				resolves.shift()();
/******/ 			}
/******/ 		
/******/ 			// add entry modules from loaded chunk to deferred list
/******/ 			if(executeModules) deferredModules.push.apply(deferredModules, executeModules);
/******/ 		
/******/ 			// run deferred modules when all chunks ready
/******/ 			return checkDeferredModules();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkorigin"] = self["webpackChunkorigin"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 		
/******/ 		function checkDeferredModulesImpl() {
/******/ 			var result;
/******/ 			for(var i = 0; i < deferredModules.length; i++) {
/******/ 				var deferredModule = deferredModules[i];
/******/ 				var fulfilled = true;
/******/ 				for(var j = 1; j < deferredModule.length; j++) {
/******/ 					var depId = deferredModule[j];
/******/ 					if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferredModules.splice(i--, 1);
/******/ 					result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 				}
/******/ 			}
/******/ 			if(deferredModules.length === 0) {
/******/ 				__webpack_require__.x();
/******/ 				__webpack_require__.x = x => {};
/******/ 			}
/******/ 			return result;
/******/ 		}
/******/ 		var startup = __webpack_require__.x;
/******/ 		__webpack_require__.x = () => {
/******/ 			// reset startup function so it can be called again when more startup code is added
/******/ 			__webpack_require__.x = startup || (x => {});
/******/ 			return (checkDeferredModules = checkDeferredModulesImpl)();
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// run startup
/******/ 	var __webpack_exports__ = __webpack_require__.x();
/******/ 	
/******/ })()
;