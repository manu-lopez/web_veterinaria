<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../component/head/head.html'; ?>

</head>

<body>
  <?php include '../component/navbar/navbar.php'; ?>

  <div class="container-fluid body-inicio">

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

    <center>
      <h1 id="nuestros-servicios">NUESTROS SERVICIOS</h1>
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

            <i class="fas fa-cut fa-7x"></i>

            <p>
              <h4>PELUQUERÍA</h4>
            </p>

          </div>
        </div>

      </div>

      <div class="col-lg-3 col-inicio">

        <div class="card text-center bg-transparent e">
          <div class="card-body ">

            <i class="fas fa-cut fa-7x"></i>

            <p>
              <h4>PELUQUERÍA</h4>
            </p>

          </div>
        </div>

      </div>

    </div>

    <img src="../imagenes/linea.svg" id="linea1" alt="">


    <div class="donde-estamos">
      <form>
        <div class="container-fluid text-center text-md-left">
          <div class="card col-lg-6">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 ">
                  <div class="form-group">
                    <h3>Nombre</h3>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                  <div class="form-group">
                    <h3 for="nombre">Email</h3>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
                <div class="col-md-8 ">
                  <div class="form-group">
                    <h3 for="comentarios">Mensaje</h3>
                    <textarea class="form-control" rows="5" id="comentarios" name="comentarios"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 ">
                  <p class="card-text">Le informamos que sus datos personales serán tratados por MISHUELLITAS,
                    con el fin de gestionar su solicitud y el mantenimiento de las relaciones profesionales
                    y comerciales con usted. Sus datos no serán cedidos a terceros. Esta tratamiento de
                    datos es necesario para atender su solicitud. Sus datos serán conservados hasta que
                    Usted se dé de baja del servicio y/o pasado un tiempo prudencial desde que atendamos su
                    solicitud.
                    Ud. puede ejercer sus derechos de acceso, rectificación, cancelación, oposición,
                    portabilidad y limitación del tratamiento de sus datos dirigiéndose a MISHUELLITAS IES
                    Francisco romero vargas o a contacto@mishuellitas.com, acompañando copia de su DNI
                    acreditando debidamente su identidad.
                    En cualquier situación, Ud. tiene derecho a presentar una reclamación ante la Agencia
                    Española de Protección de Datos (AEPD). </p>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox1" name="checkbox1">
                    <label class="form-check-label" for="checkbox1">
                      Acepto ley de protección de datos
                    </label>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12 ">
                  <button type="submit" class="btn-outline-dark btn-formulario">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>



    </div>

    
    <img src="../imagenes/linea.svg" id="linea2" alt="">



    <div class="footer-inicio">
      <?php include '../component/footer/footer.php'; ?>
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