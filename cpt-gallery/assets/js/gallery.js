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

/***/ "./src/js/gallery.js":
/*!***************************!*\
  !*** ./src/js/gallery.js ***!
  \***************************/
/***/ (function() {

eval("(function ($) {\n  $(document).ready(function () {\n    $('.product-gallery').justifiedGallery({\n      lastRow: 'justify',\n      rowHeight: 200,\n      maxRowHeight: 400,\n      rel: 'justified-gallery',\n      margins: '10',\n      randomize: true,\n      captions: true\n    }).on('jg.complete', function () {\n      $(this).find('a').colorbox({\n        maxWidth: '100%',\n        maxHeight: '100%',\n        opacity: 0.8,\n        transition: 'elastic',\n        current: ''\n      });\n    });\n  });\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9pbm5vc3Rhci1lbnRyeS8uL3NyYy9qcy9nYWxsZXJ5LmpzP2Y0OWMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJqdXN0aWZpZWRHYWxsZXJ5IiwibGFzdFJvdyIsInJvd0hlaWdodCIsIm1heFJvd0hlaWdodCIsInJlbCIsIm1hcmdpbnMiLCJyYW5kb21pemUiLCJjYXB0aW9ucyIsIm9uIiwiZmluZCIsImNvbG9yYm94IiwibWF4V2lkdGgiLCJtYXhIZWlnaHQiLCJvcGFjaXR5IiwidHJhbnNpdGlvbiIsImN1cnJlbnQiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiJBQUVBLENBQUMsVUFBVUEsQ0FBVixFQUFhO0FBRVZBLEVBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUUxQkYsSUFBQUEsQ0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JHLGdCQUF0QixDQUF1QztBQUNuQ0MsTUFBQUEsT0FBTyxFQUFHLFNBRHlCO0FBRW5DQyxNQUFBQSxTQUFTLEVBQUcsR0FGdUI7QUFHbkNDLE1BQUFBLFlBQVksRUFBRSxHQUhxQjtBQUluQ0MsTUFBQUEsR0FBRyxFQUFHLG1CQUo2QjtBQUtuQ0MsTUFBQUEsT0FBTyxFQUFHLElBTHlCO0FBTW5DQyxNQUFBQSxTQUFTLEVBQUUsSUFOd0I7QUFPbkNDLE1BQUFBLFFBQVEsRUFBRTtBQVB5QixLQUF2QyxFQVVHQyxFQVZILENBVU0sYUFWTixFQVVxQixZQUFZO0FBQzdCWCxNQUFBQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFZLElBQVIsQ0FBYSxHQUFiLEVBQWtCQyxRQUFsQixDQUEyQjtBQUN2QkMsUUFBQUEsUUFBUSxFQUFHLE1BRFk7QUFFdkJDLFFBQUFBLFNBQVMsRUFBRyxNQUZXO0FBR3ZCQyxRQUFBQSxPQUFPLEVBQUcsR0FIYTtBQUl2QkMsUUFBQUEsVUFBVSxFQUFHLFNBSlU7QUFLdkJDLFFBQUFBLE9BQU8sRUFBRztBQUxhLE9BQTNCO0FBT0gsS0FsQkQ7QUFxQkgsR0F2QkQ7QUEwQkgsQ0E1QkQsRUE0QkdDLE1BNUJIIiwic291cmNlc0NvbnRlbnQiOlsiXG5cbihmdW5jdGlvbiAoJCkge1xuXG4gICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuXG4gICAgICAgICQoJy5wcm9kdWN0LWdhbGxlcnknKS5qdXN0aWZpZWRHYWxsZXJ5KHtcbiAgICAgICAgICAgIGxhc3RSb3cgOiAnanVzdGlmeScsXG4gICAgICAgICAgICByb3dIZWlnaHQgOiAyMDAsXG4gICAgICAgICAgICBtYXhSb3dIZWlnaHQ6IDQwMCxcbiAgICAgICAgICAgIHJlbCA6ICdqdXN0aWZpZWQtZ2FsbGVyeScsXG4gICAgICAgICAgICBtYXJnaW5zIDogJzEwJyxcbiAgICAgICAgICAgIHJhbmRvbWl6ZTogdHJ1ZSxcbiAgICAgICAgICAgIGNhcHRpb25zOiB0cnVlLFxuXG5cbiAgICAgICAgfSkub24oJ2pnLmNvbXBsZXRlJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgJCh0aGlzKS5maW5kKCdhJykuY29sb3Jib3goe1xuICAgICAgICAgICAgICAgIG1heFdpZHRoIDogJzEwMCUnLFxuICAgICAgICAgICAgICAgIG1heEhlaWdodCA6ICcxMDAlJyxcbiAgICAgICAgICAgICAgICBvcGFjaXR5IDogMC44LFxuICAgICAgICAgICAgICAgIHRyYW5zaXRpb24gOiAnZWxhc3RpYycsXG4gICAgICAgICAgICAgICAgY3VycmVudCA6ICcnXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG5cblxuICAgIH0pO1xuXG5cbn0pKGpRdWVyeSk7XG5cbiJdLCJmaWxlIjoiLi9zcmMvanMvZ2FsbGVyeS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/gallery.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/gallery.js"]();
/******/ 	
/******/ })()
;