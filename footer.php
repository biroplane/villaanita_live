<a name="contatti"></a>
<footer height="500">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="container-fluid">
          <div class="card my-4" style="width: 100%">
            <img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" alt="Villa Anita logo" width="100"
              class="mx-4">
            <div class="card-body">
              <p>Strada Provinciale, 2<br>70038 - Terlizzi (Ba)<br>P.Iva 01234567</p>
            </div>
            <!-- <div class="card-footer">
              <button class="btn btn-outline-primary"><i class="mdi mdi-facebook"></i></button>
              <button class="btn btn-outline-primary"><i class="mdi mdi-twitter"></i></button>
              <button class="btn btn-outline-primary"><i class="mdi mdi-instagram"></i></button>
            </div> -->
          </div>
          <div class="container-fluid ">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group"><label for="">Nome</label><input type="text" class="form-control"></div>
              </div>
              <div class="col-md-12">
                <div class="form-group"><label for="">Email</label><input type="text" class="form-control"></div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Messaggio</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-controlz">

                  <div class="btn btn-outline-primary btn-disabled">Invia</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-8">
        <div id="map"></div>
      </div>
    </div>
    <!-- <div class="row d-flexalign-items-baseline">
      <div class="col-md-4 col-xs-12">
        <div class="card my-4" style="width: 100%">
          <img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" alt="Villa Anita logo" width="100"
            class="mx-4">
          <div class="card-body">
            <p>Strada Provinciale, 2<br>70038 - Terlizzi (Ba)<br>P.Iva 01234567</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-outline-primary"><i class="mdi mdi-facebook"></i></button>
            <button class="btn btn-outline-primary"><i class="mdi mdi-twitter"></i></button>
            <button class="btn btn-outline-primary"><i class="mdi mdi-instagram"></i></button>
          </div>
        </div>

      </div>
      <div class="col-md-8 col-xs-12">
        
        </div>
      </div>



    </div> -->
  </div>
</footer>
<script src="<?= get_template_directory_uri()?>/dist/bundle.js"></script>
<script>
var el = document.getElementById("map");
console.log("ECCO EL ", el);
var map;
var marker = {
  lat: 41.127492,
  lng: 16.530003,

};
const mapOptions = {
  zoom: 17,
  center: marker,
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
  map = new google.maps.Map(el, mapOptions);

  marker = new google.maps.Marker({
    lat: 41.127492,
    lng: 16.530003,
    map: map,

  });
  console.log("MARKER ICON ", marker, map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWHM0sku6eP8S34pskZ7dhPnZ-5ov-DVk&callback=initMap" async
  defer></script>
<!-- <script id="CookieDeclaration" src="https://consent.cookiebot.com/446c1e0f-e662-46e6-895f-3572fee9f028/cd.js"
  type="text/javascript" async></script> -->

<?php wp_footer(); ?>
</body>

</html>