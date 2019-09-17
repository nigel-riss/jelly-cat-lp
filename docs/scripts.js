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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/scripts.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/rellax/rellax.js":
/*!***************************************!*\
  !*** ./node_modules/rellax/rellax.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("/* WEBPACK VAR INJECTION */(function(global) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;\n// ------------------------------------------\n// Rellax.js\n// Buttery smooth parallax library\n// Copyright (c) 2016 Moe Amaya (@moeamaya)\n// MIT license\n//\n// Thanks to Paraxify.js and Jaime Cabllero\n// for parallax concepts\n// ------------------------------------------\n\n(function (root, factory) {\n  if (true) {\n    // AMD. Register as an anonymous module.\n    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),\n\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?\n\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),\n\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));\n  } else {}\n}(typeof window !== \"undefined\" ? window : global, function () {\n  var Rellax = function(el, options){\n    \"use strict\";\n\n    var self = Object.create(Rellax.prototype);\n\n    var posY = 0;\n    var screenY = 0;\n    var posX = 0;\n    var screenX = 0;\n    var blocks = [];\n    var pause = true;\n\n    // check what requestAnimationFrame to use, and if\n    // it's not supported, use the onscroll event\n    var loop = window.requestAnimationFrame ||\n      window.webkitRequestAnimationFrame ||\n      window.mozRequestAnimationFrame ||\n      window.msRequestAnimationFrame ||\n      window.oRequestAnimationFrame ||\n      function(callback){ return setTimeout(callback, 1000 / 60); };\n\n    // store the id for later use\n    var loopId = null;\n\n    // Test via a getter in the options object to see if the passive property is accessed\n    var supportsPassive = false;\n    try {\n      var opts = Object.defineProperty({}, 'passive', {\n        get: function() {\n          supportsPassive = true;\n        }\n      });\n      window.addEventListener(\"testPassive\", null, opts);\n      window.removeEventListener(\"testPassive\", null, opts);\n    } catch (e) {}\n\n    // check what cancelAnimation method to use\n    var clearLoop = window.cancelAnimationFrame || window.mozCancelAnimationFrame || clearTimeout;\n\n    // check which transform property to use\n    var transformProp = window.transformProp || (function(){\n        var testEl = document.createElement('div');\n        if (testEl.style.transform === null) {\n          var vendors = ['Webkit', 'Moz', 'ms'];\n          for (var vendor in vendors) {\n            if (testEl.style[ vendors[vendor] + 'Transform' ] !== undefined) {\n              return vendors[vendor] + 'Transform';\n            }\n          }\n        }\n        return 'transform';\n      })();\n\n    // Default Settings\n    self.options = {\n      speed: -2,\n      center: false,\n      wrapper: null,\n      relativeToWrapper: false,\n      round: true,\n      vertical: true,\n      horizontal: false,\n      callback: function() {},\n    };\n\n    // User defined options (might have more in the future)\n    if (options){\n      Object.keys(options).forEach(function(key){\n        self.options[key] = options[key];\n      });\n    }\n\n    // By default, rellax class\n    if (!el) {\n      el = '.rellax';\n    }\n\n    // check if el is a className or a node\n    var elements = typeof el === 'string' ? document.querySelectorAll(el) : [el];\n\n    // Now query selector\n    if (elements.length > 0) {\n      self.elems = elements;\n    }\n\n    // The elements don't exist\n    else {\n      console.warn(\"Rellax: The elements you're trying to select don't exist.\");\n      return;\n    }\n\n    // Has a wrapper and it exists\n    if (self.options.wrapper) {\n      if (!self.options.wrapper.nodeType) {\n        var wrapper = document.querySelector(self.options.wrapper);\n\n        if (wrapper) {\n          self.options.wrapper = wrapper;\n        } else {\n          console.warn(\"Rellax: The wrapper you're trying to use doesn't exist.\");\n          return;\n        }\n      }\n    }\n\n\n    // Get and cache initial position of all elements\n    var cacheBlocks = function() {\n      for (var i = 0; i < self.elems.length; i++){\n        var block = createBlock(self.elems[i]);\n        blocks.push(block);\n      }\n    };\n\n\n    // Let's kick this script off\n    // Build array for cached element values\n    var init = function() {\n      for (var i = 0; i < blocks.length; i++){\n        self.elems[i].style.cssText = blocks[i].style;\n      }\n\n      blocks = [];\n\n      screenY = window.innerHeight;\n      screenX = window.innerWidth;\n      setPosition();\n\n      cacheBlocks();\n\n      animate();\n\n      // If paused, unpause and set listener for window resizing events\n      if (pause) {\n        window.addEventListener('resize', init);\n        pause = false;\n        // Start the loop\n        update();\n      }\n    };\n\n    // We want to cache the parallax blocks'\n    // values: base, top, height, speed\n    // el: is dom object, return: el cache values\n    var createBlock = function(el) {\n      var dataPercentage = el.getAttribute( 'data-rellax-percentage' );\n      var dataSpeed = el.getAttribute( 'data-rellax-speed' );\n      var dataZindex = el.getAttribute( 'data-rellax-zindex' ) || 0;\n      var dataMin = el.getAttribute( 'data-rellax-min' );\n      var dataMax = el.getAttribute( 'data-rellax-max' );\n\n      // initializing at scrollY = 0 (top of browser), scrollX = 0 (left of browser)\n      // ensures elements are positioned based on HTML layout.\n      //\n      // If the element has the percentage attribute, the posY and posX needs to be\n      // the current scroll position's value, so that the elements are still positioned based on HTML layout\n      var wrapperPosY = self.options.wrapper ? self.options.wrapper.scrollTop : (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop);\n      // If the option relativeToWrapper is true, use the wrappers offset to top, subtracted from the current page scroll.\n      if (self.options.relativeToWrapper) {\n        var scrollPosY = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop);\n        wrapperPosY = scrollPosY - self.options.wrapper.offsetTop;\n      }\n      var posY = self.options.vertical ? ( dataPercentage || self.options.center ? wrapperPosY : 0 ) : 0;\n      var posX = self.options.horizontal ? ( dataPercentage || self.options.center ? self.options.wrapper ? self.options.wrapper.scrollLeft : (window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft) : 0 ) : 0;\n\n      var blockTop = posY + el.getBoundingClientRect().top;\n      var blockHeight = el.clientHeight || el.offsetHeight || el.scrollHeight;\n\n      var blockLeft = posX + el.getBoundingClientRect().left;\n      var blockWidth = el.clientWidth || el.offsetWidth || el.scrollWidth;\n\n      // apparently parallax equation everyone uses\n      var percentageY = dataPercentage ? dataPercentage : (posY - blockTop + screenY) / (blockHeight + screenY);\n      var percentageX = dataPercentage ? dataPercentage : (posX - blockLeft + screenX) / (blockWidth + screenX);\n      if(self.options.center){ percentageX = 0.5; percentageY = 0.5; }\n\n      // Optional individual block speed as data attr, otherwise global speed\n      var speed = dataSpeed ? dataSpeed : self.options.speed;\n\n      var bases = updatePosition(percentageX, percentageY, speed);\n\n      // ~~Store non-translate3d transforms~~\n      // Store inline styles and extract transforms\n      var style = el.style.cssText;\n      var transform = '';\n\n      // Check if there's an inline styled transform\n      var searchResult = /transform\\s*:/i.exec(style);\n      if (searchResult) {\n        // Get the index of the transform\n        var index = searchResult.index;\n\n        // Trim the style to the transform point and get the following semi-colon index\n        var trimmedStyle = style.slice(index);\n        var delimiter = trimmedStyle.indexOf(';');\n\n        // Remove \"transform\" string and save the attribute\n        if (delimiter) {\n          transform = \" \" + trimmedStyle.slice(11, delimiter).replace(/\\s/g,'');\n        } else {\n          transform = \" \" + trimmedStyle.slice(11).replace(/\\s/g,'');\n        }\n      }\n\n      return {\n        baseX: bases.x,\n        baseY: bases.y,\n        top: blockTop,\n        left: blockLeft,\n        height: blockHeight,\n        width: blockWidth,\n        speed: speed,\n        style: style,\n        transform: transform,\n        zindex: dataZindex,\n        min: dataMin,\n        max: dataMax\n      };\n    };\n\n    // set scroll position (posY, posX)\n    // side effect method is not ideal, but okay for now\n    // returns true if the scroll changed, false if nothing happened\n    var setPosition = function() {\n      var oldY = posY;\n      var oldX = posX;\n\n      posY = self.options.wrapper ? self.options.wrapper.scrollTop : (document.documentElement || document.body.parentNode || document.body).scrollTop || window.pageYOffset;\n      posX = self.options.wrapper ? self.options.wrapper.scrollLeft : (document.documentElement || document.body.parentNode || document.body).scrollLeft || window.pageXOffset;\n      // If option relativeToWrapper is true, use relative wrapper value instead.\n      if (self.options.relativeToWrapper) {\n        var scrollPosY = (document.documentElement || document.body.parentNode || document.body).scrollTop || window.pageYOffset;\n        posY = scrollPosY - self.options.wrapper.offsetTop;\n      }\n\n\n      if (oldY != posY && self.options.vertical) {\n        // scroll changed, return true\n        return true;\n      }\n\n      if (oldX != posX && self.options.horizontal) {\n        // scroll changed, return true\n        return true;\n      }\n\n      // scroll did not change\n      return false;\n    };\n\n    // Ahh a pure function, gets new transform value\n    // based on scrollPosition and speed\n    // Allow for decimal pixel values\n    var updatePosition = function(percentageX, percentageY, speed) {\n      var result = {};\n      var valueX = (speed * (100 * (1 - percentageX)));\n      var valueY = (speed * (100 * (1 - percentageY)));\n\n      result.x = self.options.round ? Math.round(valueX) : Math.round(valueX * 100) / 100;\n      result.y = self.options.round ? Math.round(valueY) : Math.round(valueY * 100) / 100;\n\n      return result;\n    };\n\n    // Remove event listeners and loop again\n    var deferredUpdate = function() {\n      window.removeEventListener('resize', deferredUpdate);\n      window.removeEventListener('orientationchange', deferredUpdate);\n      (self.options.wrapper ? self.options.wrapper : window).removeEventListener('scroll', deferredUpdate);\n      (self.options.wrapper ? self.options.wrapper : document).removeEventListener('touchmove', deferredUpdate);\n\n      // loop again\n      loopId = loop(update);\n    };\n\n    // Loop\n    var update = function() {\n      if (setPosition() && pause === false) {\n        animate();\n\n        // loop again\n        loopId = loop(update);\n      } else {\n        loopId = null;\n\n        // Don't animate until we get a position updating event\n        window.addEventListener('resize', deferredUpdate);\n        window.addEventListener('orientationchange', deferredUpdate);\n        (self.options.wrapper ? self.options.wrapper : window).addEventListener('scroll', deferredUpdate, supportsPassive ? { passive: true } : false);\n        (self.options.wrapper ? self.options.wrapper : document).addEventListener('touchmove', deferredUpdate, supportsPassive ? { passive: true } : false);\n      }\n    };\n\n    // Transform3d on parallax element\n    var animate = function() {\n      var positions;\n      for (var i = 0; i < self.elems.length; i++){\n        var percentageY = ((posY - blocks[i].top + screenY) / (blocks[i].height + screenY));\n        var percentageX = ((posX - blocks[i].left + screenX) / (blocks[i].width + screenX));\n\n        // Subtracting initialize value, so element stays in same spot as HTML\n        positions = updatePosition(percentageX, percentageY, blocks[i].speed);// - blocks[i].baseX;\n        var positionY = positions.y - blocks[i].baseY;\n        var positionX = positions.x - blocks[i].baseX;\n\n        // The next two \"if\" blocks go like this:\n        // Check if a limit is defined (first \"min\", then \"max\");\n        // Check if we need to change the Y or the X\n        // (Currently working only if just one of the axes is enabled)\n        // Then, check if the new position is inside the allowed limit\n        // If so, use new position. If not, set position to limit.\n\n        // Check if a min limit is defined\n        if (blocks[i].min !== null) {\n          if (self.options.vertical && !self.options.horizontal) {\n            positionY = positionY <= blocks[i].min ? blocks[i].min : positionY;\n          }\n          if (self.options.horizontal && !self.options.vertical) {\n            positionX = positionX <= blocks[i].min ? blocks[i].min : positionX;\n          }\n        }\n\n        // Check if a max limit is defined\n        if (blocks[i].max !== null) {\n          if (self.options.vertical && !self.options.horizontal) {\n            positionY = positionY >= blocks[i].max ? blocks[i].max : positionY;\n          }\n          if (self.options.horizontal && !self.options.vertical) {\n            positionX = positionX >= blocks[i].max ? blocks[i].max : positionX;\n          }\n        }\n\n        var zindex = blocks[i].zindex;\n\n        // Move that element\n        // (Set the new translation and append initial inline transforms.)\n        var translate = 'translate3d(' + (self.options.horizontal ? positionX : '0') + 'px,' + (self.options.vertical ? positionY : '0') + 'px,' + zindex + 'px) ' + blocks[i].transform;\n        self.elems[i].style[transformProp] = translate;\n      }\n      self.options.callback(positions);\n    };\n\n    self.destroy = function() {\n      for (var i = 0; i < self.elems.length; i++){\n        self.elems[i].style.cssText = blocks[i].style;\n      }\n\n      // Remove resize event listener if not pause, and pause\n      if (!pause) {\n        window.removeEventListener('resize', init);\n        pause = true;\n      }\n\n      // Clear the animation loop to prevent possible memory leak\n      clearLoop(loopId);\n      loopId = null;\n    };\n\n    // Init\n    init();\n\n    // Allow to recalculate the initial values whenever we want\n    self.refresh = init;\n\n    return self;\n  };\n  return Rellax;\n}));\n\n/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ \"./node_modules/webpack/buildin/global.js\")))\n\n//# sourceURL=webpack:///./node_modules/rellax/rellax.js?");

/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var g;\n\n// This works in non-strict mode\ng = (function() {\n\treturn this;\n})();\n\ntry {\n\t// This works if eval is allowed (see CSP)\n\tg = g || new Function(\"return this\")();\n} catch (e) {\n\t// This works if the window reference is available\n\tif (typeof window === \"object\") g = window;\n}\n\n// g can still be undefined, but nothing to do about it...\n// We return undefined, instead of nothing here, so it's\n// easier to handle this case. if(!global) { ...}\n\nmodule.exports = g;\n\n\n//# sourceURL=webpack:///(webpack)/buildin/global.js?");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var rellax__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! rellax */ \"./node_modules/rellax/rellax.js\");\n/* harmony import */ var rellax__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(rellax__WEBPACK_IMPORTED_MODULE_0__);\n\n\n // Policy popup window\n\nvar policyPopup = document.querySelector('.policy-popup');\nvar policyPopupClose = document.querySelector('.policy-popup__close');\nvar policyLink = document.querySelector('.footer__policy');\npolicyLink.addEventListener('click', function (evt) {\n  evt.preventDefault();\n  policyPopup.classList.remove('policy-popup--hidden');\n});\npolicyPopupClose.addEventListener('click', function (evt) {\n  evt.preventDefault();\n  policyPopup.classList.add('policy-popup--hidden');\n}); // Contact popup window\n\nvar contactPopup = document.querySelector('.contact-popup');\nvar contactPopupClose = document.querySelector('.contact-popup__close');\nvar contactPopupCover = document.querySelector('.contact-popup__cover');\ndocument.addEventListener('click', function (evt) {\n  if (evt.target.classList.contains('contact-button')) {\n    evt.preventDefault();\n    contactPopup.classList.remove('contact-popup--hidden');\n  }\n});\ncontactPopupClose.addEventListener('click', function (evt) {\n  evt.preventDefault();\n  contactPopup.classList.add('contact-popup--hidden');\n});\ncontactPopupCover.addEventListener('click', function (evt) {\n  evt.preventDefault();\n  contactPopup.classList.add('contact-popup--hidden');\n});\n\nif (window && window.innerWidth > 1000) {\n  // Parallax with Rellax\n  var dotsRellax = new rellax__WEBPACK_IMPORTED_MODULE_0___default.a('.deco-layer--dots', {\n    speed: 9,\n    center: true,\n    wrapper: null,\n    round: true,\n    vertical: true,\n    horizontal: false\n  });\n  var dots2Rellax = new rellax__WEBPACK_IMPORTED_MODULE_0___default.a('.deco-layer--dots-2', {\n    speed: 3,\n    center: true,\n    wrapper: null,\n    round: true,\n    vertical: true,\n    horizontal: false\n  });\n  var imgRellax = new rellax__WEBPACK_IMPORTED_MODULE_0___default.a('.deco-layer--images', {\n    speed: 2,\n    center: true,\n    wrapper: null,\n    round: true,\n    vertical: true,\n    horizontal: false\n  });\n}\n\n//# sourceURL=webpack:///./src/js/scripts.js?");

/***/ })

/******/ });