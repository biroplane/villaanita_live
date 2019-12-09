<footer height="500">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">

        <img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" alt="Villa Anita logo" width="100">
        <p></p>
      </div>
      <!-- <v-col cols="4">
        <v-card flat class="transparent">
          <v-card-title />
          <v-card-text>
            <v-img :src="require('@/assets/logo.png')" width="100" />
            <p class="pt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. veniam?
            </p>
          </v-card-text>
          <v-card-actions>
            <v-btn icon color="primary">
              <v-icon>mdi-facebook</v-icon>
            </v-btn>
            <v-btn icon color="primary">
              <v-icon>mdi-twitter</v-icon>
            </v-btn>
            <v-btn icon color="primary">
              <v-icon>mdi-instagram</v-icon>
            </v-btn>
            <v-btn text color="primary">
              <v-icon>mdi-telephone</v-icon>
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-col> -->

      <v-col cols="8">
        <v-container fluid>
          <v-row>
            <v-col cols="6">
              <v-text-field dense label="Nome" outlined />
            </v-col>
            <v-col cols="6">
              <v-text-field dense label="Mail" validate-on-blur="" outlined />
            </v-col>
            <v-col cols="12">
              <inpunt <textarea outlined dense name="input-7-4" label="Outlined textarea"
                value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through.">
            </v-col>
            <v-col cols="2" offset="10">
              <button class="btn btn-block btn-outline-primary" outlined block>
                Invia.
              </button>
            </v-col>
          </v-row>
        </v-container>
      </v-col>
    </div>
  </div>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWHM0sku6eP8S34pskZ7dhPnZ-5ov-DVk&callback=initMap">
</script>
<script src="<?= get_template_directory_uri()?>/dist/bundle.js"></script>
</body>

</html>