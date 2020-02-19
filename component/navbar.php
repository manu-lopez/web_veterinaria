<div id="prueba" class="container-fluid ">
  <!-- Navbar emergencias -->

  <div class="nav-contact">
    <ul class="nav justify-content-around">
      <li class="nav-item btn-location-phone">
        <span onclick="window.open('https://goo.gl/maps/xtXPSWTJ5ka4jxLK6')">
          <button type="button" class="btn btn-outline-dark"><i class="fas fa-location-arrow"></i>Localización</button>
        </span>
      </li>
      <li class="nav-item btn-location-phone">
        <a class="nav-link text-dark disabled"><i class="fas fa-mobile-alt"> Teléfono 24h: +34 666 666 666</i></a>
      </li>
      <li class="nav-item">

        <div class="container-audio">
          <audio controls loop>
            <source src="media/vivaldi.mp3" type="audio/ogg">
            Your browser dose not Support the audio Tag
          </audio>
        </div>
      </li>
      <li class="d-flex nav-item">
        <a class="svg" href="https://www.youtube.com/watch?v=GWCldYPEsl4">
          <img src="imagenes/spain.svg" alt="Icono bandera españa">
        </a>
        <a class="svg" href="https://www.youtube.com/watch?v=dicKXopOyDI">
          <img src="imagenes/united-kingdom.svg" alt="Icono Bandera Reino Unido">
        </a>
      </li>
    </ul>
  </div>
  <!-- Navbar Principal -->

  <div class="body-nav-2">

    <nav class="d-flex justify-content-around nav-principal navbar navbar-expand-lg navbar-dark">
      <div class="contenedorlogo ">
        <a class="logo" href="index.php">
          <img src="imagenes/logo_completo.png" width="150" height="90" alt="Logo Mis Huellitas">
        </a>
      </div>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tienda.php">Tienda</a>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-caret-down"></i> Citas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="veterinaria.php">Veterinaria</a>
              <a class="dropdown-item" href="guarderia.php">Guarderia</a>
              <a class="dropdown-item" href="peluqueria.php">Peluqueria</a>
              <a class="dropdown-item" href="adiestramiento.php">Adiestramiento</a>
              <a class="dropdown-item" href="construccion.php">Esterilización</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="adopcion.php">Adopción</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Acceder</a>
          </li>
          <?php
          $actual_link = "$_SERVER[REQUEST_URI]";
          if ($actual_link == "/tienda.php") {
          ?>
            <li class="nav-item">
              <a href="cesta.php"><i class="fas fa-shopping-cart fa-lg" id="enlacecesta" style="color: white"></i></a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </nav>
  </div>
</div>