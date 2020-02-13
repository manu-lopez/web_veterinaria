<head>
    <?php include 'component/head.html'; ?>
</head>
<body>
    <?php include 'component/navbar.php'; ?>
    <div class="container-adopcion">

    <h3 class="titulo">Animales en adopción</h3>
    
    <div class="adopcion">
    <?php 
        for ($i=0; $i < 9; $i++) { 
            ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="imagenes/adopcion.png" alt="Foto perro adopcion">
                <div class="card-body">
                    <h5 class="card-title">Nombre Perro</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, atque?</p>
                    <a href="contacto.php" class="btn btn-outline-light">Adoptar</a>
                </div>
            </div>
             <?php
        }
    ?>
    </div>
    </div>
    <footer>
        <?php include 'component/footer.php'; ?>
    </footer>
</body>