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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/uapp.js":
/*!******************************!*\
  !*** ./resources/js/uapp.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$.validator.addMethod("lettersonly", function (value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please");
$.validator.addMethod("letterspaceonly", function (value, element) {
  return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Letters only please");
jQuery.validator.addMethod("dateform", function (value, element) {
  return this.optional(element) || /^\d\d?-\w\w\w-\d\d\d\d/.test(value);
}, "Please specify the date in DD-MMM-YYYY format");
var regform = $('#register-form');
regform.steps({
  headerTag: '.form-header',
  bodyTag: '.form-section',
  labels: {
    current: "",
    pagination: ""
  },
  // transitionEffect: "slideLeft",
  onStepChanging: function onStepChanging(event, currentIndex, newIndex) {
    if (currentIndex > newIndex) return true;
    regform.validate().settings.ignore = ":disabled,:hidden";
    return regform.valid();
  },
  onStepChanged: function onStepChanged(event, currentIndex, priorIndex) {
    if (currentIndex == 1) {
      $('#username').val($('#regemail').val());
    }
  },
  onFinishing: function onFinishing(event, currentIndex) {
    regform.validate().settings.ignore = ":disabled";
    return regform.valid();
  },
  onFinished: function onFinished(event, currentIndex) {
    $(this).submit();
  }
}).validate({
  normalizer: function normalizer(value) {
    return $.trim(value);
  },
  rules: {
    firstname: {
      required: true,
      lettersonly: true
    },
    othername: {
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
    stateoforigin: {
      required: true,
      letterspaceonly: true
    },
    placeofbirth: {
      required: true,
      letterspaceonly: true
    },
    dateofbirth: {
      required: true,
      dateform: true
    },
    maritalstatus: {
      required: true
    },
    phaddress: {
      required: true
    },
    nokfullname: {
      required: true,
      letterspaceonly: true
    },
    nokphonenum: {
      required: true,
      number: true
    },
    nokaddress: {
      required: true
    },
    occupation: {
      required: true
    },
    // bizaddress: { required: true },
    bankname: {
      required: true
    },
    accountname: {
      required: true
    },
    accountnumber: {
      required: true,
      number: true,
      minlength: 10
    },
    username: {
      required: true
    },
    password: {
      required: true,
      minlength: 3
    },
    password_confirmation: {
      required: true,
      equalTo: '#password'
    }
  },
  errorPlacement: function errorPlacement(error, element) {
    if (element.attr('name') === 'maritalstatus') {
      error.insertAfter(".radio-field");
    } else {
      error.insertAfter(element);
    }
  } // submitHandler: function(form) {
  //     regform.submit();
  // }

});
$('#birthdatepicker').datepicker({
  dateFormat: 'dd-M-yy',
  changeMonth: true,
  changeYear: true,
  yearRange: "1975:-nn"
});
$('#contribute-modal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var member = button.data('member');
  var modal = $(this);
  modal.find('.modal-title').text(member); // modal.find('.modal-body input').val(recipient)
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/uapp.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\prj\lara\loanmanager\resources\js\uapp.js */"./resources/js/uapp.js");


/***/ })

/******/ });