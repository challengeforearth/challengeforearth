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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Resources/assets/js/app.js":
/*!************************************!*\
  !*** ./Resources/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var _require = __webpack_require__(/*! ./feedForm */ "./Resources/assets/js/feedForm.js"),
    initForm = _require.initForm;

var _require2 = __webpack_require__(/*! ./feed */ "./Resources/assets/js/feed.js"),
    initFeed = _require2.initFeed,
    updateFeed = _require2.updateFeed;

var initializer = __webpack_require__(/*! ./initializer */ "./Resources/assets/js/initializer.js");

var main = function main() {
  initForm("#feedform", function () {
    $("#feedformbody").val("");
    updateFeed("#feedlist");
  });
  initFeed("#feedlist");
};

initializer.init(main());

/***/ }),

/***/ "./Resources/assets/js/components/FeedPost.js":
/*!****************************************************!*\
  !*** ./Resources/assets/js/components/FeedPost.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _FeedPostCommentItem__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FeedPostCommentItem */ "./Resources/assets/js/components/FeedPostCommentItem.js");


var FeedPost = function FeedPost(_ref) {
  var postid = _ref.postid,
      _ref$user = _ref.user,
      firstname = _ref$user.firstname,
      lastname = _ref$user.lastname,
      body = _ref.body,
      created_at = _ref.created_at,
      reactions = _ref.reactions,
      comments = _ref.comments;
  comments.sort(function (a, b) {
    return new Date(b.created_at) - new Date(a.created_at);
  });
  return "\n        <div class=\"feed-post\" data-post-id=\"".concat(postid, "\">\n            <div class=\"feed-post-header\">\n                <div class=\"feed-post-icon-container\">\n                    <img src=\"https://i.picsum.photos/id/404/200/200.jpg?hmac=7TesL9jR4uM2T_rW-vLbBjqvfeR37MJKTYA4TV-giwo\" alt=\"\" class=\"feed-post-icon\">\n                </div>\n                <div class=\"feed-post-header-content\">\n                    <h3 class=\"feed-post-username\">").concat(firstname + " " + lastname, "</h3>\n                    <h3 class=\"feed-post-date\">").concat(moment(created_at).locale("fr").fromNow(), "</h3>\n                </div>\n                <div class=\"feed-tools\">\n                    <i class=\"ri-more-fill\"></i>\n                </div>\n            </div>\n            <div class=\"feed-post-body\">").concat(body, "</div>\n            <div class=\"feed-post-footer\">\n                <div class=\"feed-post-reaction\" data-reaction-type=\"like\">\n                    <i class=\"ri-thumb-up-fill\"></i> <span>").concat(reactions.length, " J'aime</span>\n                </div>\n                <div class=\"feed-post-reaction\" data-reaction-type=\"comments\">\n                    <i class=\"ri-chat-1-fill\"></i> <span>").concat(comments.length, " Commentaires</span>\n                </div>\n                <div class=\"feed-post-reaction\">\n                    <i class=\"ri-share-forward-fill\"></i> <span>Partager</span>\n                </div>\n            </div>\n            <div class=\"feed-post-comments\">\n                <form action=\"/api/posts/comment/add\" class=\"feed-post-comments-field-container\" method=\"post\">\n                    <input class=\"feed-post-comments-field\" type=\"text\" name=\"body\" placeholder=\"Commenter...\" />\n                    <button class=\"feed-post-comments-submit\" type=\"submit\">Poster</button>\n                </form>\n                <div class=\"feed-post-comments-container ").concat(comments.length < 1 ? "empty" : "", "\">\n                    ").concat(comments.map(function (comment) {
    return Object(_FeedPostCommentItem__WEBPACK_IMPORTED_MODULE_0__["default"])(comment);
  }).join(""), "\n                    <span class=\"expand-button\">Voir plus de commentaires</span>\n                </div>\n            </div>\n        </div>\n    ");
};

/* harmony default export */ __webpack_exports__["default"] = (FeedPost);

/***/ }),

/***/ "./Resources/assets/js/components/FeedPostCommentItem.js":
/*!***************************************************************!*\
  !*** ./Resources/assets/js/components/FeedPostCommentItem.js ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var FeedPostCommentItem = function FeedPostCommentItem(_ref) {
  var _ref$user = _ref.user,
      firstname = _ref$user.firstname,
      lastname = _ref$user.lastname,
      body = _ref.body,
      created_at = _ref.created_at;
  return "\n    <div class=\"feed-post-comments-item\">\n        <div class=\"feed-post-comment-header\">\n            <div class=\"feed-post-comment-icon-container\">\n                <img src=\"https://picsum.photos/id/1011/5472/3648\" alt=\"\" class=\"feed-post-comment-icon\">\n            </div>\n            <div class=\"feed-post-comment-header-content\">\n                <h3 class=\"feed-post-comment-username\">".concat(firstname + " " + lastname, "</h3>\n                <h3 class=\"feed-post-comment-date\">").concat(moment(created_at).locale("fr").fromNow(), "</h3>\n            </div>\n            <div class=\"feed-tools\">\n                <i class=\"ri-more-fill\"></i>\n            </div>\n        </div>\n        <div class=\"feed-post-comment-body\">").concat(body, "</div>\n    </div>\n");
};

/* harmony default export */ __webpack_exports__["default"] = (FeedPostCommentItem);

/***/ }),

/***/ "./Resources/assets/js/feed.js":
/*!*************************************!*\
  !*** ./Resources/assets/js/feed.js ***!
  \*************************************/
/*! exports provided: initFeed, addFeed */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "initFeed", function() { return initFeed; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "addFeed", function() { return addFeed; });
/* harmony import */ var _logger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logger */ "./Resources/assets/js/logger.js");
/* harmony import */ var _post__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./post */ "./Resources/assets/js/post.js");
/* harmony import */ var _components_FeedPost__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/FeedPost */ "./Resources/assets/js/components/FeedPost.js");



var state = false;
var initFeed = function initFeed(feedSelector) {
  addFeed(feedSelector);
  initScroll(feedSelector);
};

var initScroll = function initScroll(feedSelector) {
  $('.feed').scroll(function () {
    var wH = $(feedSelector).height(),
        wS = $(this).scrollTop();

    if (wH - 500 < wS && !state) {
      state = true;
      addFeed(feedSelector);
    }
  });
};

var addFeed = function addFeed(feedSelector) {
  var formData = new FormData();
  formData.append('next', $(feedSelector).length);
  $.ajax({
    type: 'post',
    url: "/api/posts/feed?_token=".concat($('meta[name="csrf-token"]').attr('content')),
    success: function success(response) {
      Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])('feed', response);
      var posts = response === null || response === void 0 ? void 0 : response.data.sort(function (a, b) {
        return new Date(b.created_at) - new Date(a.created_at);
      });
      var htmlPosts = "";
      posts.forEach(function (post) {
        htmlPosts += Object(_components_FeedPost__WEBPACK_IMPORTED_MODULE_2__["default"])(post);
      });
      $(feedSelector).append(htmlPosts);
      posts.forEach(function (post) {
        Object(_post__WEBPACK_IMPORTED_MODULE_1__["initPost"])(feedSelector, post.postid);
      });
      state = false;
    },
    error: function error(ex) {
      Object(_logger__WEBPACK_IMPORTED_MODULE_0__["error"])(ex);
    }
  });
};

/***/ }),

/***/ "./Resources/assets/js/feedForm.js":
/*!*****************************************!*\
  !*** ./Resources/assets/js/feedForm.js ***!
  \*****************************************/
/*! exports provided: initForm */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "initForm", function() { return initForm; });
/* harmony import */ var _logger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logger */ "./Resources/assets/js/logger.js");

var initForm = function initForm(formSelector) {
  var successHandler = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : function () {};
  var form = $(formSelector);
  form.on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: form.attr('method'),
      url: "".concat(form.attr('action'), "?_token=").concat($('meta[name="csrf-token"]').attr('content')),
      data: form.serialize(),
      dataType: 'json',
      success: function success(response) {
        Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])('feedform', response);
        successHandler(response);

        if (response.success) {
          if (!$(formSelector + ' [type="submit"]').hasClass('success')) {
            $(formSelector + ' [type="submit"]').toggleClass('success');
            setTimeout(function () {
              $(formSelector + ' [type="submit"]').toggleClass('success');
            }, 2000);
          }
        } else {
          if (!$(formSelector + ' [type="submit"]').hasClass('error')) {
            $(formSelector + ' [type="submit"]').toggleClass('error');
            setTimeout(function () {
              $(formSelector + ' [type="submit"]').toggleClass('error');
            }, 2000);
          }
        }
      },
      error: function error(ex) {
        Object(_logger__WEBPACK_IMPORTED_MODULE_0__["error"])(ex);

        if (!$(formSelector + ' [type="submit"]').hasClass('error')) {
          $(formSelector + ' [type="submit"]').toggleClass('error');
          setTimeout(function () {
            $(formSelector + ' [type="submit"]').toggleClass('error');
          }, 2000);
        }
      }
    });
  });
};

/***/ }),

/***/ "./Resources/assets/js/initializer.js":
/*!********************************************!*\
  !*** ./Resources/assets/js/initializer.js ***!
  \********************************************/
/*! exports provided: init */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "init", function() { return init; });
/* harmony import */ var _logger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logger */ "./Resources/assets/js/logger.js");

var init = function init() {
  var process = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : function () {};
  Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])('app', 'Initialization...');
  var t0 = performance.now();
  process();
  var t1 = performance.now();
  Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])('app', "Initialized in ".concat(t1 - t0, " milliseconds"));
};

/***/ }),

/***/ "./Resources/assets/js/like.js":
/*!*************************************!*\
  !*** ./Resources/assets/js/like.js ***!
  \*************************************/
/*! exports provided: initLike */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "initLike", function() { return initLike; });
/* harmony import */ var _logger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logger */ "./Resources/assets/js/logger.js");
/* harmony import */ var _post__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./post */ "./Resources/assets/js/post.js");
/* harmony import */ var _components_FeedPost__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/FeedPost */ "./Resources/assets/js/components/FeedPost.js");



var initLike = function initLike(feedSelector, postId, reactionType) {
  Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])("like", postId, reactionType);
  var formData = new FormData();
  formData.append('postId', postId);
  formData.append('reactionType', reactionType);
  $.ajax({
    type: 'post',
    url: "/api/posts/reaction/add?_token=".concat($('meta[name="csrf-token"]').attr('content')),
    data: formData,
    processData: false,
    contentType: false,
    success: function success(response) {
      Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])("like", response);
    },
    error: function error(ex) {
      Object(_logger__WEBPACK_IMPORTED_MODULE_0__["error"])(ex);
    },
    complete: function complete() {
      $.ajax({
        type: 'post',
        url: "/api/posts/post?_token=".concat($('meta[name="csrf-token"]').attr('content')),
        data: formData,
        processData: false,
        contentType: false,
        success: function success(response) {
          Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])("post", response);

          if (response.data) {
            $("".concat(feedSelector, " [data-post-id=").concat(postId, "]")).replaceWith(Object(_components_FeedPost__WEBPACK_IMPORTED_MODULE_2__["default"])(response.data));
            Object(_post__WEBPACK_IMPORTED_MODULE_1__["initPost"])(feedSelector, response.data.postid);
          }
        },
        error: function error(ex) {
          Object(_logger__WEBPACK_IMPORTED_MODULE_0__["error"])(ex);
        }
      });
    }
  });
};

/***/ }),

/***/ "./Resources/assets/js/logger.js":
/*!***************************************!*\
  !*** ./Resources/assets/js/logger.js ***!
  \***************************************/
/*! exports provided: debug, error */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "debug", function() { return debug; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "error", function() { return error; });
var debug = function debug(service) {
  var _console;

  for (var _len = arguments.length, logItems = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
    logItems[_key - 1] = arguments[_key];
  }

  (_console = console).log.apply(_console, ["%c".concat(service.toUpperCase()), "background-color: #d7bb87; border-radius: 5px; padding: 3px; color: #372910;"].concat(logItems));
};
var error = function error() {
  var _console2;

  for (var _len2 = arguments.length, logItems = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
    logItems[_key2] = arguments[_key2];
  }

  (_console2 = console).error.apply(_console2, ["%cERROR", "background-color: #ff4757; border-radius: 5px; padding: 3px; color: #fff;"].concat(logItems));
};

/***/ }),

/***/ "./Resources/assets/js/post.js":
/*!*************************************!*\
  !*** ./Resources/assets/js/post.js ***!
  \*************************************/
/*! exports provided: initPost */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "initPost", function() { return initPost; });
/* harmony import */ var _logger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logger */ "./Resources/assets/js/logger.js");
/* harmony import */ var _like__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./like */ "./Resources/assets/js/like.js");
/* harmony import */ var _components_FeedPost__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/FeedPost */ "./Resources/assets/js/components/FeedPost.js");



var initPost = function initPost(feedSelector, postId) {
  var form = $("".concat(feedSelector, " [data-post-id=").concat(postId, "] .feed-post-comments-field-container"));
  form.on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData();
    formData.append('postId', postId);
    $.ajax({
      type: form.attr('method'),
      url: "".concat(form.attr('action'), "?_token=").concat($('meta[name="csrf-token"]').attr('content')),
      data: "".concat(form.serialize(), "&postId=").concat(postId),
      dataType: 'json',
      success: function success(response) {
        Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])('comment', response);
      },
      error: function error(ex) {
        Object(_logger__WEBPACK_IMPORTED_MODULE_0__["error"])(ex);
      },
      complete: function complete() {
        $.ajax({
          type: 'post',
          url: "/api/posts/post?_token=".concat($('meta[name="csrf-token"]').attr('content')),
          data: formData,
          processData: false,
          contentType: false,
          success: function success(response) {
            Object(_logger__WEBPACK_IMPORTED_MODULE_0__["debug"])("post", response);

            if (response.data) {
              $("".concat(feedSelector, " [data-post-id=").concat(postId, "]")).replaceWith(Object(_components_FeedPost__WEBPACK_IMPORTED_MODULE_2__["default"])(response.data));
              initPost(feedSelector, response.data.postid);
            }
          },
          error: function error(ex) {
            Object(_logger__WEBPACK_IMPORTED_MODULE_0__["error"])(ex);
          }
        });
      }
    });
  });
  $("".concat(feedSelector, " [data-post-id=").concat(postId, "] .feed-post-reaction[data-reaction-type=\"like\"]")).click(function (event) {
    Object(_like__WEBPACK_IMPORTED_MODULE_1__["initLike"])(feedSelector, $(event.currentTarget).parent().parent().attr("data-post-id"), $(event.currentTarget).attr("data-reaction-type"));
  });
  $("".concat(feedSelector, " [data-post-id=").concat(postId, "] .expand-button")).click(function () {
    $("".concat(feedSelector, " [data-post-id=").concat(postId, "] .feed-post-comments-container")).addClass("expand");
  });
  $("".concat(feedSelector, " [data-post-id=").concat(postId, "] .feed-post-reaction[data-reaction-type=\"comments\"]")).click(function () {
    $("".concat(feedSelector, " [data-post-id=").concat(postId, "] .feed-post-comments-container")).toggleClass("expand");
  });
};

/***/ }),

/***/ "./Resources/assets/sass/app.scss":
/*!****************************************!*\
  !*** ./Resources/assets/sass/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************!*\
  !*** multi ./Resources/assets/js/app.js ./Resources/assets/sass/app.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/fdoyen/Documents/dev/challenge-for-earth/Modules/SocialHub/Resources/assets/js/app.js */"./Resources/assets/js/app.js");
module.exports = __webpack_require__(/*! /home/fdoyen/Documents/dev/challenge-for-earth/Modules/SocialHub/Resources/assets/sass/app.scss */"./Resources/assets/sass/app.scss");


/***/ })

/******/ });