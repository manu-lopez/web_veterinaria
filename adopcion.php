<head>
    <?php include 'component/head.html'; ?>
</head>
<body>
    <?php include 'component/navbar.php'; ?>
    <div class="container-adopcion">

    <h3 class="titulo">Animales en adopción</h3>
    
    <div class="adopcion">
    <?php 
        $nombres = ["Coco","Luna","Bongo","Meque","Tobi","Linda","Nerón","Gringo","Danco"];
        $texto = ["Coco es un perro playero. Se encuentra en los <u>Caños de Meca</u> y tiene 3 años.","Luna es muy feliz, tiene 1 año aproximadamente y se encuentra en <u>Jerez</u>.","Bongo es rockero y le encanta los RHCP, se encuentra en <u>Cádiz</u> y tiene 5 años.","Meque quiere aprender a volar, es un cachorro aún y se encuentra en <u>San Fernando</u>.","Tobi es un romántico, tiene 8 años y vive en <u>Málaga</u>, en Puerto Banús.","Linda siempre sospecha, vive en <u>Jerez</u> y tiene 4 añitos.","Nerón necesita mimitos, tiene solo 4 meses y está en <u>Vejer</u>.","Gringo es peleón, está en las <u>bodegas Domecq</u> y tiene 4 años.","Danco ama la lasaña, tiene 8 años y está en <u>Puerto Real</u>."];
        for ($i=0; $i < 9; $i++) { 
            ?>
            <div class="card cardAdopcion" style="width: 18rem;">
                <img class="card-img-top" src="imagenes/adopcion/adopcion<?php echo $i+1; ?>.png" title="Foto de <?php echo $nombres[$i]; ?>" alt="Foto de <?php echo $nombres[$i]; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nombres[$i]; ?></h5>
                    <p class="card-text"><?php echo $texto[$i]; ?></p>
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