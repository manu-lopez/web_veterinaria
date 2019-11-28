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
              Ven a visitarnos o pide cita previa llamando al 666 666 666.
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
            <h3>Atención las 24 horas. Puedes confiar en nosotros, tu mascota estará siempre en las mejores manos.</h3>
          </div>
        </div>
      </div>
      <!-- botones de desplazamiento a izquierda y derecha -->
      <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carousel1" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>

    <!-- ZONA SERVICIOS -->

    <div class="mt-5">
      <center>
        <h2 class="text-white">NUESTROS SERVICIOS</h2>
      </center>

      <div class="row  justify-content-center mt-5 fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3 ">
            <div class="card-body ">

              <i class="fas fa-cut fa-7x"></i>

              <p>
                <h4>PELUQUERÍA</h4>
              </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3">
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
          <div class="card text-center bg-transparent mt-3 ">
            <div class="card-body ">

              <i class="fas fa-award fa-7x"></i>
              <p>
                <h4>ADIESTRAMIENTO</h4>
              </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3 ">
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
          <div class="card text-center bg-transparent  mt-3">
            <div class="card-body ">

              <i class="fas fa-school fa-7x"></i>

              <p>
                <h4>GUARDERÍA</h4>
              </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent e mt-3">
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

    <img src="../imagenes/linea.svg" class="linea1 mt-5" alt="">

    <!-- ZONA "DONDE ESTAMOS" -->


    <center>
      <h2 class="text-white">DONDE ESTAMOS</h2>
    </center>

    <?php include '../component/contact/form.php'; ?>

    <!-- ZONA FOOTER -->

    <div class="footer-inicio">

      <?php include '../component/footer/footer.php'; ?>

    </div>
  </div>

</body>
</html>