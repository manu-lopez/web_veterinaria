<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/head.html'; ?>
</head>

<body>


    <?php include 'component/navbar.php'; ?>

    <div class="body-login">

        <div class="container-fluid">

            <center>
                <h2 class="text-white ">Acceder</h2>
            </center>



            <div class="row justify-content-center contacto mt-5 ml-4 mr-4">
                <div class="col-lg-7">
                    <form>
                        <div class="container-fluid text-center text-md-left ">
                            <div class="card col-lg">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <h4>Nombre</h4>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Email</h4>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Contraseña</h4>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <h4>Apellidos</h4>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Repetir email</h4>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Repetir contraseña</h4>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox1" name="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                    He leído y acepto la <a class="enlace-estilo" href="">política de privacidad</a> y los <a class="enlace-estilo" href=""> términos de uso
                                                        de la web</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <center>
                                                <button type="submit" class="btn-outline-dark btn-formulario mt-2">Registrar</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card col-lg-4 card-login">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md ">
                                <div class="form-group">
                                    <h4>Email</h4>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <h4 for="nombre">Contraseña</h4>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <center>
                                    <button type="submit" class="btn-outline-dark btn-formulario mt-2">Iniciar</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="footer-inicio">

                <?php include 'component/footer.php'; ?>

            </div>

        </div>
    </div>
</body>

</html>