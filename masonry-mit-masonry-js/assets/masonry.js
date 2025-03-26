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

eval("document.addEventListener('DOMContentLoaded', function () {\n  // Masonry initialisieren\n  var masonryGallery = document.querySelector('.tsc-masonry-gallery');\n\n  // if (masonryGallery) {\n  //     new Masonry(masonryGallery, {\n  //         itemSelector: 'a',\n  //         columnWidth: 'a',\n  //         gutter: 10,\n  //         percentPosition: true\n  //     });\n  // }\n\n  // FsLightbox ggf. refreshen (optional, nur falls du es dynamisch lädst)\n  // if (typeof refreshFsLightbox === 'function') {\n  //     refreshFsLightbox();\n  // }\n\n  // init with selector\n  var msnry = new Masonry('.tsc-masonry-gallery', {\n    // options...\n    itemSelector: 'a',\n    columnWidth: 'a',\n    gutter: 20,\n    percentPosition: true,\n    fitWidth: true\n  });\n});\nvar resizeTimeout;\nwindow.addEventListener('resize', function () {\n  clearTimeout(resizeTimeout);\n  resizeTimeout = setTimeout(function () {\n    if (msnry) {\n      msnry.layout();\n    }\n  }, 300);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJtYXNvbnJ5R2FsbGVyeSIsInF1ZXJ5U2VsZWN0b3IiLCJtc25yeSIsIk1hc29ucnkiLCJpdGVtU2VsZWN0b3IiLCJjb2x1bW5XaWR0aCIsImd1dHRlciIsInBlcmNlbnRQb3NpdGlvbiIsImZpdFdpZHRoIiwicmVzaXplVGltZW91dCIsIndpbmRvdyIsImNsZWFyVGltZW91dCIsInNldFRpbWVvdXQiLCJsYXlvdXQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vZmZhZmxlbnovLi9zcmMvanMvbWFzb25yeS5qcz84Yzc2Il0sInNvdXJjZXNDb250ZW50IjpbImRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgLy8gTWFzb25yeSBpbml0aWFsaXNpZXJlblxuICAgIGNvbnN0IG1hc29ucnlHYWxsZXJ5ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnRzYy1tYXNvbnJ5LWdhbGxlcnknKTtcblxuICAgIC8vIGlmIChtYXNvbnJ5R2FsbGVyeSkge1xuICAgIC8vICAgICBuZXcgTWFzb25yeShtYXNvbnJ5R2FsbGVyeSwge1xuICAgIC8vICAgICAgICAgaXRlbVNlbGVjdG9yOiAnYScsXG4gICAgLy8gICAgICAgICBjb2x1bW5XaWR0aDogJ2EnLFxuICAgIC8vICAgICAgICAgZ3V0dGVyOiAxMCxcbiAgICAvLyAgICAgICAgIHBlcmNlbnRQb3NpdGlvbjogdHJ1ZVxuICAgIC8vICAgICB9KTtcbiAgICAvLyB9XG5cbiAgICAvLyBGc0xpZ2h0Ym94IGdnZi4gcmVmcmVzaGVuIChvcHRpb25hbCwgbnVyIGZhbGxzIGR1IGVzIGR5bmFtaXNjaCBsw6Rkc3QpXG4gICAgLy8gaWYgKHR5cGVvZiByZWZyZXNoRnNMaWdodGJveCA9PT0gJ2Z1bmN0aW9uJykge1xuICAgIC8vICAgICByZWZyZXNoRnNMaWdodGJveCgpO1xuICAgIC8vIH1cblxuICAgIC8vIGluaXQgd2l0aCBzZWxlY3RvclxuICAgIHZhciBtc25yeSA9IG5ldyBNYXNvbnJ5KCAnLnRzYy1tYXNvbnJ5LWdhbGxlcnknLCB7XG4gICAgICAgIC8vIG9wdGlvbnMuLi5cbiAgICAgICAgaXRlbVNlbGVjdG9yOiAnYScsXG4gICAgICAgIGNvbHVtbldpZHRoOiAnYScsXG4gICAgICAgIGd1dHRlcjogMjAsXG4gICAgICAgIHBlcmNlbnRQb3NpdGlvbjogdHJ1ZSxcbiAgICAgICAgZml0V2lkdGg6IHRydWUsXG5cbiAgICB9KTtcblxuXG5cbn0pO1xubGV0IHJlc2l6ZVRpbWVvdXQ7XG5cbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdyZXNpemUnLCBmdW5jdGlvbiAoKSB7XG4gICAgY2xlYXJUaW1lb3V0KHJlc2l6ZVRpbWVvdXQpO1xuICAgIHJlc2l6ZVRpbWVvdXQgPSBzZXRUaW1lb3V0KCgpID0+IHtcbiAgICAgICAgaWYgKG1zbnJ5KSB7XG4gICAgICAgICAgICBtc25yeS5sYXlvdXQoKTtcbiAgICAgICAgfVxuICAgIH0sIDMwMCk7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUFBLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsa0JBQWtCLEVBQUUsWUFBWTtFQUN0RDtFQUNBLElBQU1DLGNBQWMsR0FBR0YsUUFBUSxDQUFDRyxhQUFhLENBQUMsc0JBQXNCLENBQUM7O0VBRXJFO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7O0VBRUE7RUFDQTtFQUNBO0VBQ0E7O0VBRUE7RUFDQSxJQUFJQyxLQUFLLEdBQUcsSUFBSUMsT0FBTyxDQUFFLHNCQUFzQixFQUFFO0lBQzdDO0lBQ0FDLFlBQVksRUFBRSxHQUFHO0lBQ2pCQyxXQUFXLEVBQUUsR0FBRztJQUNoQkMsTUFBTSxFQUFFLEVBQUU7SUFDVkMsZUFBZSxFQUFFLElBQUk7SUFDckJDLFFBQVEsRUFBRTtFQUVkLENBQUMsQ0FBQztBQUlOLENBQUMsQ0FBQztBQUNGLElBQUlDLGFBQWE7QUFFakJDLE1BQU0sQ0FBQ1gsZ0JBQWdCLENBQUMsUUFBUSxFQUFFLFlBQVk7RUFDMUNZLFlBQVksQ0FBQ0YsYUFBYSxDQUFDO0VBQzNCQSxhQUFhLEdBQUdHLFVBQVUsQ0FBQyxZQUFNO0lBQzdCLElBQUlWLEtBQUssRUFBRTtNQUNQQSxLQUFLLENBQUNXLE1BQU0sQ0FBQyxDQUFDO0lBQ2xCO0VBQ0osQ0FBQyxFQUFFLEdBQUcsQ0FBQztBQUNYLENBQUMsQ0FBQyIsImlnbm9yZUxpc3QiOltdLCJmaWxlIjoiLi9zcmMvanMvbWFzb25yeS5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/masonry.js\n");

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