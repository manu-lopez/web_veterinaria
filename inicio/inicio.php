<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../component/head/head.html'; ?>

</head>

<body>
  <?php include '../component/navbar/navbar.php'; ?>

  <div class="container-fluid body-inicio">

    <!-- ZONA CARRUSEL IMAGENES -->

    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <!-- diapositivas -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../imagenes/cab1.jpg" alt="">
          <div class="carousel-caption">
            <h3>Atendemos a tu mascota de la mejor manera posible. Especializados en medicina interna y cirugía.
              Ven a visitarnos o pide cita previa llamando al 666 666 666
            </h3>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../imagenes/cab2.jpg" alt="">
          <div class="carousel-caption">
            <h3>En la clínica disponemos de medios técnicos de última generación y conocimientos diagnósticos y
              terapéuticos
              de vanguardia. Tu mascota estará en las mejores manos.</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../imagenes/cab3.jpg" alt="">
          <div class="carousel-caption">
            <p>Descripción de la imagen.</p>
          </div>
        </div>
      </div>
      <!-- botones de desplazamiento a izquierda y derecha -->
      <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- ZONA SERVICIOS -->

    <div class="mt-5">
      <center>
        <h2 class="text-white">NUESTROS SERVICIOS</h2>
      </center>

      <div class="row  justify-content-center mt-5 fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent ">
            <div class="card-body ">

              <i class="fas fa-cut fa-7x"></i>

              <p>
                <h4>PELUQUERÍA</h4>
              </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent ">
            <div class="card-body ">

              <i class="fas fa-notes-medical fa-7x"></i>

              <p>
                <h4>VETERINARIA</h4>
              </p>

            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center   fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent ">
            <div class="card-body ">

              <i class="fas fa-award fa-7x"></i>
              <p>
                <h4>ADIESTRAMIENTO</h4>
              </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent ">
            <div class="card-body ">

              <i class="fas fa-hand-holding-heart fa-7x"></i>

              <p>
                <h4>ADOPCIÓN</h4>
              </p>

            </div>
          </div>
        </div>
      </div>


      <div class="row justify-content-center  fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent ">
            <div class="card-body ">

              <i class="fas fa-school fa-7x"></i>

              <p>
                <h4>GUARDERÍA</h4>
              </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent e">
            <div class="card-body ">

              <i class="fas fa-bone fa-7x"></i>

              <p>
                <h4>NUTRICIÓN</h4>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>

    <img src="../imagenes/linea.svg" id="linea1" alt="">


    <!-- ZONA "DONDE ESTAMOS" -->

    <div class="donde-estamos mt-0 ml-4 mr-4">

      <center>
        <h2 class="text-white">DONDE ESTAMOS</h2>
      </center>

      <div class="row justify-content-center mt-5">
        <div class="col-lg-8">

          <?php include '../component/formulario/form.php'; ?>

        </div>
        <div class="col-lg-4">
          <div id="map-container-google-9" class="z-depth-1-half map-container-5">

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.108397646558!2d-6.1321926844215975!3d36.67189467997505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0dc6f48d92c5d7%3A0x207a96eef12d978d!2sIES%20Francisco%20Romero%20Vargas!5e0!3m2!1ses!2sus!4v1574351538783!5m2!1ses!2sus"
              frameborder="0" allowfullscreen class="rounded-lg mapa"></iframe>
          </div>

        </div>
      </div>
    </div>

    <img src="../imagenes/linea.svg" id="linea2" alt="">

    <!-- ZONA FOOTER -->

    <div class="footer-inicio">

      <?php include '../component/footer/footer.php'; ?>

    </div>
  </div>
  </div>


  <!--     
<script type="text/javascript">
$('.carousel').carousel({
     interval: 1000,
     pause:true,
     wrap:true
});
</script> -->



</body>

</html>