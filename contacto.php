<html lang="en">
<?php
include 'General/head.php';
?>

<body>
  <header>
    <?php
    include 'General/navegacion.php';
    ?>
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('img/contacto-garoimpresion.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title">Contactanos</h1>
            <h4>Conozca al increíble equipo detrás de este proyecto y descubra más sobre cómo trabajamos.</h4>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="contactus-2">
    <div id="contactUs2Map" class="map" style="overflow: hidden;">
      <div class="mapa"style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223); ">
        <div class="gm-err-container">
          <div class="gm-err-content">
            <div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div>
            <div class="gm-err-title">Se produjo un error.</div>
            <div class="gm-err-message">Esta página no cargó bien Google Maps. Consulta la consola de JavaScript para obtener los detalles técnicos.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-contact card-raised">
        <form id="contact-form2" method="post">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title">Contact Us</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="info info-horizontal">
                  <div class="icon icon-rose">
                    <i class="material-icons">phone</i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Give us a ring</h5>
                    <p> Michael Jordan
                      <br> +40 762 321 762
                      <br> Mon - Fri, 8:00-22:00
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info info-horizontal">
                  <div class="icon icon-rose">
                    <i class="material-icons">pin_drop</i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Find us at the office</h5>
                    <p> Bld Mihail Kogalniceanu, nr. 8,
                      <br> 7652 Bucharest,
                      <br> Romania
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating is-empty has-rose bmd-form-group">
                  <label class="bmd-label-floating">Full Name</label>
                  <input type="text" name="email" class="form-control">
                  <span class="material-input"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating is-empty has-rose bmd-form-group">
                  <label class="bmd-label-floating">Email address</label>
                  <input type="email" name="email" class="form-control">
                  <span class="material-input"></span>
                </div>
              </div>
            </div>
            <div class="form-group label-floating has-rose is-empty bmd-form-group">
              <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
              <textarea name="message" class="form-control" id="exampleMessage" rows="6"></textarea>
              <span class="material-input"></span>
            </div>
          </div>
          <div class="card-footer justify-content-between">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> I'm not a robot
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>

<?php
include 'General/footer.php';
include 'General/footerjs.php';
?>
<script>
  function iniciarMap() {
    var myLatLng = {
      lat: 25.4421938,
      lng: -99.9940335
    };

    var mapa = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 17,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkldTV8BKqtL1BdLTn_gpHsPILaxsyC0o&callback=iniciarMap"></script>



</html>