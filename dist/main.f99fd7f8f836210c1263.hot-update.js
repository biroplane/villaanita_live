webpackHotUpdate("main",{"./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no static exports found */function(module,exports,__webpack_require__){"use strict";eval('/* WEBPACK VAR INJECTION */(function($) {\n\n__webpack_require__(/*! @mdi/font/css/materialdesignicons.css */ "./node_modules/@mdi/font/css/materialdesignicons.css");\n\n__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");\n\n__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");\n\nvar _loadGoogleMapsApi = __webpack_require__(/*! load-google-maps-api */ "./node_modules/load-google-maps-api/index.js");\n\nvar _loadGoogleMapsApi2 = _interopRequireDefault(_loadGoogleMapsApi);\n\n__webpack_require__(/*! material-design-icons */ "./node_modules/material-design-icons/index.js");\n\n__webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js");\n\nvar _marker = __webpack_require__(/*! ./assets/img/marker.png */ "./src/assets/img/marker.png");\n\nvar _marker2 = _interopRequireDefault(_marker);\n\nvar _googlemaps_style = __webpack_require__(/*! ./assets/js/googlemaps_style */ "./src/assets/js/googlemaps_style.js");\n\nvar _googlemaps_style2 = _interopRequireDefault(_googlemaps_style);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\n__webpack_require__(/*! ./assets/scss/main.scss */ "./src/assets/scss/main.scss");\n\n// import {\n//   Map\n// } from \'./assets/js/maps\';\nvar map;\nvar marker = {\n  lat: 41.127492,\n  lng: 16.530003,\n  icon: _marker2.default\n};\nvar el = document.getElementById("map");\ndocument.addEventListener("DOMContentLoaded", function () {\n  var mapOptions = {\n    zoom: 17,\n    center: marker,\n    styles: _googlemaps_style2.default,\n    disableDefaultUI: true,\n    zoomControl: false,\n    scaleControl: false,\n    gestureHandling: "none"\n  };\n  (0, _loadGoogleMapsApi2.default)({\n    key: "AIzaSyDWHM0sku6eP8S34pskZ7dhPnZ-5ov-DVk"\n  }).then(function (googleMaps) {\n    map = new googleMaps.Map(el, mapOptions);\n    marker = new google.maps.Marker({\n      lat: 41.127492,\n      lng: 16.530003,\n      map: map,\n      icon: _marker2.default\n    });\n    console.log("MARKER ICON ", marker, map);\n  });\n});\n$(function () {\n  $(".setdrawer").on("click", function (e) {\n    e.preventDefault();\n    $(".drawer").addClass("active");\n    console.log("CLICK");\n  });\n  $(".backdrop").on("click", function (e) {\n    e.preventDefault();\n    $(".drawer").removeClass("active");\n  }); // $(document).mouseup(function (e) {\n  //   var container = $(".drawer");\n  //   // if the target of the click isn\'t the container nor a descendant of the container\n  //   if (!container.is(e.target) && container.has(e.target).length === 0) {\n  //     container.removeClass(\'active\');\n  //   }\n  // });\n});\n/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))\n\n//# sourceURL=webpack:///./src/index.js?')}});