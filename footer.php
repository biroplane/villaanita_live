<a name="contatti"></a>
<?php if(is_home(  )) {
  include(__DIR__.'/src/components/footer_home.php');
} else {
  include(__DIR__.'/src/components/footer_other.php'); 

}
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- <script src="<?= get_template_directory_uri()?>/dist/bundle.js"></script> -->
<?php if(is_home()) {?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWHM0sku6eP8S34pskZ7dhPnZ-5ov-DVk&callback=initMap" async
  defer></script>
<script>
var el = document.getElementById("map");
console.log("ECCO EL ", el);
var map;
var mks = {
  lat: 41.127492,
  lng: 16.530003,

};
var mapOptions = {
  zoom: 17,
  center: mks,
  styles: [{
      'featureType': 'all',
      'elementType': 'all',
      'stylers': [{
        'weight': '0.70'
      }]
    },
    {
      'featureType': 'all',
      'elementType': 'geometry',
      'stylers': [{
        'saturation': '-64'
      }]
    },
    {
      'featureType': 'all',
      'elementType': 'labels.text.fill',
      'stylers': [{
        'color': '#ffffff'
      }]
    },
    {
      'featureType': 'all',
      'elementType': 'labels.text.stroke',
      'stylers': [{
          'visibility': 'on'
        },
        {
          'color': '#3e606f'
        },
        {
          'weight': 2
        },
        {
          'gamma': 0.84
        }
      ]
    },
    {
      'featureType': 'all',
      'elementType': 'labels.icon',
      'stylers': [{
        'visibility': 'off'
      }]
    },
    {
      'featureType': 'administrative',
      'elementType': 'geometry',
      'stylers': [{
          'weight': 0.6
        },
        {
          'color': '#1a3541'
        }
      ]
    },
    {
      'featureType': 'landscape',
      'elementType': 'geometry',
      'stylers': [{
        'color': '#2c5a71'
      }]
    },
    {
      'featureType': 'poi',
      'elementType': 'geometry',
      'stylers': [{
        'color': '#406d80'
      }]
    },
    {
      'featureType': 'poi.park',
      'elementType': 'geometry',
      'stylers': [{
        'color': '#2c5a71'
      }]
    },
    {
      'featureType': 'road',
      'elementType': 'geometry',
      'stylers': [{
          'color': '#29768a'
        },
        {
          'lightness': -37
        }
      ]
    },
    {
      'featureType': 'transit',
      'elementType': 'geometry',
      'stylers': [{
        'color': '#406d80'
      }]
    },
    {
      'featureType': 'water',
      'elementType': 'geometry',
      'stylers': [{
        'color': '#193341'
      }]
    }
  ],
  disableDefaultUI: true,
  zoomControl: false,
  scaleControl: false,
  gestureHandling: "none"
};

function initMap() {
  var myLatLng = {
    lat: 41.127492,
    lng: 16.530003
  };

  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
    position: mks,
    map: map,
    animation: google.maps.Animation.DROP,
    title: 'Hello World!',
    image: '<?= get_template_directory_uri()?>/src/assets/img/marker.png'
  });
}
</script>
<?php } ?>
<!-- <script id="CookieDeclaration" src="https://consent.cookiebot.com/446c1e0f-e662-46e6-895f-3572fee9f028/cd.js"
  type="text/javascript" async></script> -->

<?php wp_footer(); ?>
</body>

</html>