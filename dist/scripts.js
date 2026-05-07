/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./app/js/scripts.js"
/*!***************************!*\
  !*** ./app/js/scripts.js ***!
  \***************************/
() {

jQuery(function ($) {
  var $scenes = $('.ve-scene');
  var $buttons = $('.menu li');
  var currentIndex = 0;
  var sceneTimeout;
  var sceneCount = Math.min($scenes.length, 5);
  $scenes = $scenes.slice(0, sceneCount);
  $buttons = $buttons.slice(0, sceneCount);
  function slugify(text) {
    return text.toString().toLowerCase().trim().replace(/&/g, 'and').replace(/[^a-z0-9\s-]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
  }
  function getSceneSlug(index) {
    var $scene = $('.ve-scene[data-scene="' + index + '"]');
    var sceneName = $scene.data('scene-name');
    return sceneName ? slugify(sceneName) : 'scene-' + (index + 1);
  }
  function setScene(index, updateHash) {
    if (index === currentIndex) {
      return;
    }
    clearTimeout(sceneTimeout);
    var $currentScene = $('.ve-scene.is-active');
    var $nextScene = $('.ve-scene[data-scene="' + index + '"]');
    $scenes.not($currentScene).not($nextScene).removeClass('is-active is-under');
    $currentScene.removeClass('is-active').addClass('is-under');
    $nextScene.removeClass('is-under').addClass('is-active');
    $buttons.removeClass('is-active');
    $buttons.eq(index).addClass('is-active');
    if (updateHash !== false) {
      history.replaceState(null, null, '#' + getSceneSlug(index));
    }
    currentIndex = index;
    sceneTimeout = setTimeout(function () {
      $scenes.not('.is-active').removeClass('is-under');
    }, 500);
  }
  $buttons.each(function (index) {
    $(this).attr('data-scene', index);
  });
  $buttons.on('click', function (e) {
    e.preventDefault();
    var index = $(this).data('scene');
    if (index >= 0 && index < sceneCount) {
      setScene(index, true);
    }
  });
  $('a[href^="#"]').on('click', function (e) {
    var hash = $(this).attr('href').replace('#', '');
    var matchedIndex = null;
    $scenes.each(function (index) {
      if (getSceneSlug(index) === hash) {
        matchedIndex = index;
      }
    });
    if (matchedIndex !== null) {
      e.preventDefault();
      setScene(matchedIndex, true);
    }
  });
  var hash = window.location.hash.replace('#', '');
  var matchedIndex = null;
  if (hash) {
    $scenes.each(function (index) {
      if (getSceneSlug(index) === hash) {
        matchedIndex = index;
      }
    });
  }
  if (matchedIndex !== null) {
    currentIndex = matchedIndex;
    $scenes.removeClass('is-active is-under');
    $('.ve-scene[data-scene="' + matchedIndex + '"]').addClass('is-active');
    $buttons.removeClass('is-active');
    $buttons.eq(matchedIndex).addClass('is-active');
  } else {
    $buttons.eq(0).addClass('is-active');
  }
});

/***/ },

/***/ "./app/scss/main.scss"
/*!****************************!*\
  !*** ./app/scss/main.scss ***!
  \****************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }

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
/******/ 		// Check if module exists (development only)
/******/ 		if (__webpack_modules__[moduleId] === undefined) {
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!**********************!*\
  !*** ./app/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/main.scss */ "./app/scss/main.scss");
/* harmony import */ var _js_scripts_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/scripts.js */ "./app/js/scripts.js");
/* harmony import */ var _js_scripts_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_scripts_js__WEBPACK_IMPORTED_MODULE_1__);
/* MAIN File */
// imports


})();

/******/ })()
;
//# sourceMappingURL=scripts.js.map