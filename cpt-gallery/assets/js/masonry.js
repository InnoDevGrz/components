/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/masonry.js":
/*!***************************!*\
  !*** ./src/js/masonry.js ***!
  \***************************/
/***/ (function() {

eval("function DomReady(fn) {\n  if (typeof fn !== 'function') {\n    return;\n  }\n\n  if (document.readyState === 'interactive' || document.readyState === 'complete') {\n    return fn();\n  }\n\n  document.addEventListener('DOMContentLoaded', fn, false);\n}\n/* post grid mini-masonry */\n\n\nfunction tsc_initMinimasonry() {\n  var postMinify = new MiniMasonry({\n    container: '.post-grid',\n    direction: 'rtl',\n    minify: true,\n    baseWidth: 275,\n    gutter: 30,\n    surroundingGutter: false\n  });\n}\n\nDomReady(function () {\n  tsc_initMinimasonry();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9pbm5vc3Rhci1lbnRyeS8uL3NyYy9qcy9tYXNvbnJ5LmpzPzhjNzYiXSwibmFtZXMiOlsiRG9tUmVhZHkiLCJmbiIsImRvY3VtZW50IiwicmVhZHlTdGF0ZSIsImFkZEV2ZW50TGlzdGVuZXIiLCJ0c2NfaW5pdE1pbmltYXNvbnJ5IiwicG9zdE1pbmlmeSIsIk1pbmlNYXNvbnJ5IiwiY29udGFpbmVyIiwiZGlyZWN0aW9uIiwibWluaWZ5IiwiYmFzZVdpZHRoIiwiZ3V0dGVyIiwic3Vycm91bmRpbmdHdXR0ZXIiXSwibWFwcGluZ3MiOiJBQUFBLFNBQVNBLFFBQVQsQ0FBa0JDLEVBQWxCLEVBQXNCO0FBQ2xCLE1BQUksT0FBT0EsRUFBUCxLQUFjLFVBQWxCLEVBQThCO0FBQzFCO0FBQ0g7O0FBQ0QsTUFBSUMsUUFBUSxDQUFDQyxVQUFULEtBQXdCLGFBQXhCLElBQXlDRCxRQUFRLENBQUNDLFVBQVQsS0FBd0IsVUFBckUsRUFBaUY7QUFDN0UsV0FBT0YsRUFBRSxFQUFUO0FBQ0g7O0FBQ0RDLEVBQUFBLFFBQVEsQ0FBQ0UsZ0JBQVQsQ0FBMEIsa0JBQTFCLEVBQThDSCxFQUE5QyxFQUFrRCxLQUFsRDtBQUNIO0FBRUQ7OztBQUNBLFNBQVNJLG1CQUFULEdBQStCO0FBQzNCLE1BQUlDLFVBQVUsR0FBRyxJQUFJQyxXQUFKLENBQWdCO0FBQzdCQyxJQUFBQSxTQUFTLEVBQUUsWUFEa0I7QUFFN0JDLElBQUFBLFNBQVMsRUFBRSxLQUZrQjtBQUc3QkMsSUFBQUEsTUFBTSxFQUFFLElBSHFCO0FBSTdCQyxJQUFBQSxTQUFTLEVBQUUsR0FKa0I7QUFLN0JDLElBQUFBLE1BQU0sRUFBRSxFQUxxQjtBQU03QkMsSUFBQUEsaUJBQWlCLEVBQUU7QUFOVSxHQUFoQixDQUFqQjtBQVFIOztBQUlEYixRQUFRLENBQUMsWUFBTTtBQUNYSyxFQUFBQSxtQkFBbUI7QUFHdEIsQ0FKTyxDQUFSIiwic291cmNlc0NvbnRlbnQiOlsiZnVuY3Rpb24gRG9tUmVhZHkoZm4pIHtcbiAgICBpZiAodHlwZW9mIGZuICE9PSAnZnVuY3Rpb24nKSB7XG4gICAgICAgIHJldHVybjtcbiAgICB9XG4gICAgaWYgKGRvY3VtZW50LnJlYWR5U3RhdGUgPT09ICdpbnRlcmFjdGl2ZScgfHwgZG9jdW1lbnQucmVhZHlTdGF0ZSA9PT0gJ2NvbXBsZXRlJykge1xuICAgICAgICByZXR1cm4gZm4oKTtcbiAgICB9XG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZuLCBmYWxzZSk7XG59XG5cbi8qIHBvc3QgZ3JpZCBtaW5pLW1hc29ucnkgKi9cbmZ1bmN0aW9uIHRzY19pbml0TWluaW1hc29ucnkoKSB7XG4gICAgdmFyIHBvc3RNaW5pZnkgPSBuZXcgTWluaU1hc29ucnkoe1xuICAgICAgICBjb250YWluZXI6ICcucG9zdC1ncmlkJyxcbiAgICAgICAgZGlyZWN0aW9uOiAncnRsJyxcbiAgICAgICAgbWluaWZ5OiB0cnVlLFxuICAgICAgICBiYXNlV2lkdGg6IDI3NSxcbiAgICAgICAgZ3V0dGVyOiAzMCxcbiAgICAgICAgc3Vycm91bmRpbmdHdXR0ZXI6IGZhbHNlXG4gICAgfSk7XG59XG5cblxuXG5Eb21SZWFkeSgoKSA9PiB7XG4gICAgdHNjX2luaXRNaW5pbWFzb25yeSgpO1xuXG5cbn0pO1xuIl0sImZpbGUiOiIuL3NyYy9qcy9tYXNvbnJ5LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/js/masonry.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/masonry.js"]();
/******/ 	
/******/ })()
;