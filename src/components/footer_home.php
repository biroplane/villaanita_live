<footer class="home-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-12 pb-4">
        <div class="container-fluid">
          <div class="card my-4" style="width: 100%">
            <img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" alt="Villa Anita logo" width="100"
              class="mx-4">
            <div class="card-body">
              <strong>Villa Anita s.r.l.</strong><br>
              <p>Strada Provinciale, 2<br>70038 - Terlizzi (Ba)<br>
                <small>CF / P.Iva 07759950723 - REA 579852<br>Cap Soc
                  100.000,00 I.V.</small></p>
            </div>
            <div class="card-footer">

              <a href="https://www.villaanita.net/informativa-sulla-privacy-e-sui-cookie/">Cookie
                Policy & Privacy</a></div>
            <!-- <div class="card-footer">
              <button class="btn btn-outline-primary"><i class="mdi mdi-facebook"></i></button>
              <button class="btn btn-outline-primary"><i class="mdi mdi-twitter"></i></button>
              <button class="btn btn-outline-primary"><i class="mdi mdi-instagram"></i></button>
            </div> -->
          </div>

          <div class="container-fluid">
            <div class="row">

              <?php echo do_shortcode( '[contact-form-7 id="7" title="Contattaci"]' );?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-12">
        <div id="map"></div>
      </div>
    </div>
  </div>
</footer>