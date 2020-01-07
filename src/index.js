require("./assets/scss/main.scss");
// import "@mdi/font/css/materialdesignicons.css";
// import "bootstrap";
// import "jquery";
// import "material-design-icons";
// import "popper.js";

// import {
//   Map
// } from './assets/js/maps';

//if (el != null) {
// document.addEventListener("DOMContentLoaded", function() {
//   loadGoogleMapsApi({
//     key: process.env.GOOGLE_MAPS_API_KEY
//   }).then(function(googleMaps) {
//     map = new googleMaps.Map(el, mapOptions);
// });
//}
$(function () {
  $(".setdrawer").on("click", e => {
    e.preventDefault();
    $(".drawer").addClass("active");
    console.log("CLICK");
  });
  $(".backdrop").on("click", e => {
    e.preventDefault();

    $(".drawer").removeClass("active");
  });

  //COOKIE TESTER

  // $(document).mouseup(function (e) {
  //   var container = $(".drawer");

  //   // if the target of the click isn't the container nor a descendant of the container
  //   if (!container.is(e.target) && container.has(e.target).length === 0) {
  //     container.removeClass('active');
  //   }
  // });
});