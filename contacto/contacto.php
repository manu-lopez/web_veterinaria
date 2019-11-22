<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../component/head/head.html'; ?>

</head>

<body>

    <?php include '../component/navbar/navbar.php'; ?>

    <div class="container-fluid body-inicio">


        <center>
            <h2 class="text-white mt-5">Contacto</h2>
        </center>

        <center>
            <div class="row  justify-content-center mt-5 body-contacto">
                <div class="col-lg-3">

                    <a class="nav-link text-dark disabled"><i class="fas fa-mobile-alt">
                            <h4 class="text-white mt-5">

                                Teléfono: +34 666 666 666</h4>
                        </i>
                    </a>

                </div>
                <div class="col-lg-3 ">

                    <i class="fas fa-envelope fa-2x"></i>
                    <h4 class="text-white mt-5">

                        contacto@mishuellitos.com</h4>

                </div>
            </div>
        </center>


        <?php include '../component/contact/form.php'; ?>

        <div class="footer-inicio">

            <?php include '../component/footer/footer.php'; ?>

        </div>

    </div>

</body>

</html>