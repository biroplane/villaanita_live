<footer class="home-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-12 pb-4">
        <div class="container-fluid">
          <div class="card my-4" style="width: 100%">
            <img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" alt="Villa Anita logo" width="100"
              class="mx-4">
            <div class="card-body">
              <p>Strada Provinciale, 2<br>70038 - Terlizzi (Ba)<br>P.Iva 01234567</p>
            </div>
            <div class="card-footer">Cookie Policy & Privacy</div>
            <!-- <div class="card-footer">
              <button class="btn btn-outline-primary"><i class="mdi mdi-facebook"></i></button>
              <button class="btn btn-outline-primary"><i class="mdi mdi-twitter"></i></button>
              <button class="btn btn-outline-primary"><i class="mdi mdi-instagram"></i></button>
            </div> -->
          </div>
          <!-- <div class="container-fluid ">
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
          </div> -->
          <div class="container-fluid">
            <div class="row">

              <?php echo do_shortcode( '[contact-form-7 id="479" title="Contact form 1"]' );?>
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