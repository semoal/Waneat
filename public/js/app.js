/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
// require('./new-age');
__webpack_require__(2);
//
// /*
// window.Vue = require('vue');
// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });
// */

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {



$(document).ready(function () {
  //Permite añadir horarios duplicados
  var schedules = 0;
  $('#more-hours').click(function () {
    schedules++;
    var $foo = $('<div class="time-inner"> <div class="form-group"> <div class="col-md-6"> ' + '<label> <input type="checkbox" name="days[' + schedules + '][]" value="Lunes">' + '<span class="day-box">Lun</span> </label> - <label> <input type="checkbox" name="days[' + schedules + '][]" value="Martes"> <span class="day-box">Mar</span> </label> - <label> <input type="checkbox" name="days[' + schedules + '][]" value="Miercoles">' + '<span class="day-box">Mié</span> </label> - <label> <input type="checkbox" name="days[' + schedules + '][]" value="Jueves"> <span class="day-box">Jue</span> </label> - <label> <input type="checkbox" name="days[' + schedules + '][]" value="Viernes"> ' + '<span class="day-box">Vie</span> </label> - <label> <input type="checkbox" name="days[' + schedules + '][]" value="Sabado"> <span class="day-box">Sáb</span> </label> - <label> <input type="checkbox" name="days[' + schedules + '][]" value="Domingo">' + '<span class="day-box">Dom</span> </label> </div></div><div class="form-group"> <label class="col-md-4 control-label">Apertura: </label> <div class="col-md-6"> <input type="time" id="hour1" name="hour1[]"class="form-control"> </div></div>' + '<div class="form-group"> <label class="col-md-4 control-label">Cierre: </label> <div class="col-md-6"> <input type="time" id="hour2" name="hour2[]" class="form-control"> <div class="divider"> </div> </div></div></div>');
    $("#time-template").append($foo);
  });

  $('.remove-schedule').click(function (e) {
    $(".time-inner:last-child").remove();
    e.event;
  });

  //Navegación entre paneles en el registro de restaurantes
  $('.panel-1-next').click(function () {
    $('.panel-1').addClass('hide');
    $('.panel-2').removeClass('hide');
  });
  $('.panel-2-back').click(function () {
    $('.panel-2').addClass('hide');
    $('.panel-1').removeClass('hide');
  });
  $('.panel-2-next').click(function () {
    $('.panel-2').addClass('hide');
    $('.panel-3').removeClass('hide');
  });
  $('.panel-3-back').click(function () {
    $('.panel-3').addClass('hide');
    $('.panel-2').removeClass('hide');
  });
  $('.panel-3-next').click(function () {
    $('.panel-3').addClass('hide');
    $('.panel-4').removeClass('hide');
  });
  $('.panel-4-back').click(function () {
    $('.panel-4').addClass('hide');
    $('.panel-3').removeClass('hide');
  });
  // Funcion para previsualiazr la imagen //


  $(function () {

    $('.restaurant-toggle').click(function () {
      var link = $(this).attr('data-link');
      $("#restaurant-content").load(link);
      // $("#myModal").addClass('active');
    });
  });

  $(function () {
    // Multiple images preview in browser
    var imagesPreview = function imagesPreview(input, placeToInsertImagePreview) {
      if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();
          reader.onload = function (event) {
            $($.parseHTML('<img class="img-preview">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
          };
          reader.readAsDataURL(input.files[i]);
        }
      }
    };
    $('#gallery-photo-add').on('change', function () {
      imagesPreview(this, 'div.gallery');
    });
  });

  //Restaurant details modal
  $('.modal-toggle').click(function () {

    var link = $(this).attr('data-link');
    $("#myModal").load(link);
    // $("#myModal").addClass('active');
    window.location.href = "#myModal";
  });
});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);