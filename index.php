<!DOCTYPE html>
<html lang="es">

<head>
  <?php include 'component/head.html'; ?>
</head>

<body>
  <?php include 'component/navbar.php'; ?>

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
          <img class="d-block w-100" src="imagenes/cab1.jpg" title="Perro feliz tumbado en el campo" alt="Perro feliz tumbado en el campo">
          <div class="carousel-caption">
            <h3>Atendemos a tu <u>mascota</u> de la mejor manera posible. Especializados en <u>medicina interna y cirugía.</u>
              Ven a visitarnos o pide cita previa llamando al 666 666 666.
            </h3>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagenes/cab2.jpg" title="Mujer acariciando a perro" alt="Mujer acariciando a perro">
          <div class="carousel-caption">
            <h3>En la clínica disponemos de medios técnicos de <u>última generación</u> y conocimientos diagnósticos y terapéuticos de vanguardia. Tu mascota estará en las <u>mejores manos</u>.</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagenes/cab3.jpg" title="Cachorro en la playa" alt="Cachorro en la playa">
          <div class="carousel-caption">
            <h3>Atención las <u>24 horas</u>. Tu mascota estará en siempre en las mejores manos. Puedes <u>confiar en nosotros</u>.</h3>
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
        <h2 class="text-white" style="text-align:center">NUESTROS SERVICIOS</h2>

      <div class="row  justify-content-center mt-5 fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3 ">
            <div class="card-body ">

              <i class="iconoServicio fas fa-cut fa-7x"></i>
                <h4>PELUQUERÍA</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3">
            <div class="card-body ">

              <i class="iconoServicio fas fa-notes-medical fa-7x"></i>
                <h4>VETERINARIA</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3 ">
            <div class="card-body ">
              <i class="iconoServicio fas fa-award fa-7x"></i>
              <h4>ADIESTRAMIENTO</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent mt-3 ">
            <div class="card-body ">

              <i class="iconoServicio fas fa-hand-holding-heart fa-7x"></i>
                <h4>ADOPCIÓN</h4>
            </div>
          </div>
        </div>
      </div>


      <div class="row justify-content-center fila-inicio">
        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent  mt-3">
            <div class="card-body ">

              <i class="iconoServicio fas fa-school fa-7x"></i>
                <h4>GUARDERÍA</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-inicio">
          <div class="card text-center bg-transparent e mt-3">
            <div class="card-body ">

              <i class="iconoServicio fas fa-bone fa-7x"></i>
                <h4>NUTRICIÓN</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <img src="imagenes/linea.svg" class="linea1 mt-5" alt="Separador">

    <!-- ZONA "DONDE ESTAMOS" -->


      <h2 class="text-white" style="text-align:center">DÓNDE ESTAMOS</h2>

    <?php include 'component/form.php'; ?>

    <!-- ZONA FOOTER -->

    <div class="footer-inicio">

      <?php include 'component/footer.php'; ?>

    </div>
  </div>

</body>

</html>