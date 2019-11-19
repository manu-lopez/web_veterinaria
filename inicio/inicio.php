<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../component/head/head.html'; ?>

</head>

<body>
<?php include '../component/navbar/navbar.php'; ?>

<div class="container-fluid">
		
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
              <h3>En la clínica disponemos de medios técnicos de última generación y conocimientos diagnósticos y terapéuticos 
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
    
    </div>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

<?php include '../component/footer/footer.php'; ?>
</body>

</html>