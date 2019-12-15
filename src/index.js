require("./assets/scss/main.scss");
import "@mdi/font/css/materialdesignicons.css";
import "bootstrap";
import "jquery";
import loadGoogleMapsApi from "load-google-maps-api";
import "material-design-icons";
import "popper.js";
import markerIcon from "./assets/img/marker.png";
import style from "./assets/js/googlemaps_style";

// import {
//   Map
// } from './assets/js/maps';

var map;
var marker = {
  lat: 41.127492,
  lng: 16.530003,
  icon: markerIcon
};
var el = document.getElementById("map");

document.addEventListener("DOMContentLoaded", function() {
  const mapOptions = {
    zoom: 17,
    center: marker,
    styles: style,
    disableDefaultUI: true,
    zoomControl: false,
    scaleControl: false,
    gestureHandling: "none"
  };
  loadGoogleMapsApi({
    key: process.env.GOOGLE_MAPS_API_KEY
  }).then(function(googleMaps) {
    map = new googleMaps.Map(el, mapOptions);

    marker = new google.maps.Marker({
      lat: 41.127492,
      lng: 16.530003,
      map: map,
      icon: markerIcon
    });
    console.log("MARKER ICON ", marker, map);
  });
});

$(function() {
  $(".setdrawer").on("click", e => {
    e.preventDefault();
    $(".drawer").addClass("active");
    console.log("CLICK");
  });
  $(".backdrop").on("click", e => {
    e.preventDefault();

    $(".drawer").removeClass("active");
  });
  // $(document).mouseup(function (e) {
  //   var container = $(".drawer");

  //   // if the target of the click isn't the container nor a descendant of the container
  //   if (!container.is(e.target) && container.has(e.target).length === 0) {
  //     container.removeClass('active');
  //   }
  // });
});
