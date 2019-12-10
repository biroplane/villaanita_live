<footer height="500">
  <div class="container-fluid">
    <div class="row d-flexalign-items-baseline">
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
        <div class="container-fluid my-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group"><label for="">Nome</label><input type="text" class="form-control"></div>
            </div>
            <div class="col-md-6">
              <div class="form-group"><label for="">Email</label><input type="text" class="form-control"></div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</footer>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWHM0sku6eP8S34pskZ7dhPnZ-5ov-DVk&callback=initMap"> -->
</script>
<script src="<?= get_template_directory_uri()?>/dist/bundle.js"></script>
</body>

</html>