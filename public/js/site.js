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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/site.js":
/*!******************************!*\
  !*** ./resources/js/site.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$('#users-table').DataTable({
  processing: true,
  serverSide: true,
  ajax: {
    url: '/users/data',
    error: function error(jqXHR, textStatus, errorThrown) {
      console.log(errorThrown);
      console.log(textStatus);
    }
  },
  columns: [{
    data: 'firstname',
    name: 'firstname'
  }, {
    data: 'lastname',
    name: 'lastname'
  }, {
    data: 'email',
    name: 'email'
  }, {
    data: 'role',
    name: 'role',
    orderable: false,
    searchable: false
  }, {
    data: 'active',
    name: 'active',
    orderable: false,
    searchable: false
  }, {
    data: 'action',
    name: 'action',
    orderable: false,
    searchable: false
  }]
});
$('#members-table').DataTable({
  processing: true,
  serverSide: true,
  ajax: {
    url: '/members',
    error: function error(jqXHR, textStatus, errorThrown) {
      console.log(errorThrown);
      console.log(textStatus);
    }
  },
  columns: [{
    data: 'memberid',
    name: 'memberid',
    orderable: false
  }, {
    data: 'firstname',
    name: 'firstname'
  }, {
    data: 'lastname',
    name: 'lastname'
  }, {
    data: 'email',
    name: 'email'
  }, // {data: 'active', name: 'active', orderable: false, searchable: false},
  {
    data: 'action',
    name: 'action',
    orderable: false,
    searchable: false
  }]
});
$.validator.addMethod("lettersonly", function (value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please");
$('#newuserform').validate({
  normalizer: function normalizer(value) {
    return $.trim(value);
  },
  rules: {
    firstname: {
      required: true,
      lettersonly: true
    },
    lastname: {
      required: true,
      lettersonly: true
    },
    email: {
      required: true,
      email: true
    },
    phone: {
      required: true,
      number: true
    },
    usertype: 'required'
  }
});

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/site.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\prj\lara\loanmanager\resources\js\site.js */"./resources/js/site.js");


/***/ })

/******/ });