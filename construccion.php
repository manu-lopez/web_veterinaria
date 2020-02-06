<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/head.html'; ?>
</head>

<body>

    <?php include 'component/navbar.php'; ?>

    <div class="body-construccion">

        <div class="contenido-body">
            <h1>EN CONSTRUCCIÓN</h1>
            <!-- <img id="imagen-construccion" src="imagenes/perro_obrero_1.jpg" src="" alt=""> -->
            <picture id="imagen-construccion">
                <source media="(min-width: 991px)" srcset="imagenes/perro_obrero_3.jpg,
                imagenes/perro_obrero_3@2x.jpg 2x">
                <source media="(min-width: 600px)" srcset="imagenes/perro_obrero_2.jpg">
                <source media="(min-width: 400px)" srcset="imagenes/perro_obrero_1.jpg">
                <img srcset="imagenes/perro_obrero_1.jpg" alt="perro disfrazado obrero">
            </picture>
            <div id="animacion-construccion"></div>
        </div>

        <div class="footer-inicio">

            <?php include 'component/footer.php'; ?>

        </div>

    </div>


</body>

</html>