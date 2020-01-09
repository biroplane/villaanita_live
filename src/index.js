require("./assets/scss/main.scss");
import "@mdi/font/css/materialdesignicons.css";
import "bootstrap";
import "jquery";
import "material-design-icons";
import "popper.js";

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
var which, tot;
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
  which = 1
  tot = $('.carousel .item').length
  setInterval(() => {
    if (which < tot) {
      console.log("WHICH ", which);
      //$('.carousel .item:eq(0)').css('left', (which * -100) + 'vh')

      which++
    } else {
      which = 1
    }
  }, 1000)
  $('.carousel .item').each((i, e) => {
    console.log("COSE ", i, e)
  })

  //COOKIE TESTER

  // $(document).mouseup(function (e) {
  //   var container = $(".drawer");

  //   // if the target of the click isn't the container nor a descendant of the container
  //   if (!container.is(e.target) && container.has(e.target).length === 0) {
  //     container.removeClass('active');
  //   }
  // });
});