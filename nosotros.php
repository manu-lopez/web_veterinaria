<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'component/head.html'; ?>
  <title>Nosotros</title>
</head>

<body>
  <?php include 'component/navbar.php'; ?>

  <header>
    <div class="overlay"></div>
    <video width="1280" height="720" playsinline autoplay muted loop>
      <source src="media/tour.mov" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <img src="imagenes/logo_blanco.svg" alt="">
          <h3>Mis Huellitas</h3>
          <p class="text-overlay mb-0 mt-5">Las mascotas, su salud y cuidados, son asuntos prioritarios para sus
            propietarios, por lo que el nivel de profesionalidad de una clínica veterinaria es primordial para la
            tranquilidad y seguridad de los clientes. En Mis Huellitas, contamos con un equipo de expertos cuya
            filosofía se centra en el bienestar de los animales para la tranquilidad de sus dueños.</p>

          <p class="text-overlay mb-0 mt-5">Nuestro equipo está formado por dos veterinarios, tres A.T.V. de clínica,
            peluquera y alumnos en prácticas. Todos ellos dispuestos a cuidar a su animal de compañía todos los días de
            la semana, 24 horas al día, en la propia clínica.</p>
        </div>
      </div>
    </div>
  </header>

  <img src="imagenes/linea.svg" class="linea1 mt-5" alt="">
  
  <!-- PERSONAL VETERINARIO -->
  <div class="personal_veterinario">
    <h3>Personal</h3>
    <div class="card" style="width:400px">
      <img class="card-img-top" src="imagenes/img_personal.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>
    <div class="card" style="width:400px">
      <img class="card-img-top" src="imagenes/img_personal2.png" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

  </div>

  <!-- TESTIMONIOS -->
  <h3>Testimonios</h3>

  <div class="footer-inicio">
    <?php include 'component/footer.php'; ?>
  </div>
</body>

</html>