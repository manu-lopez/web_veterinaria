<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/head.html'; ?>
</head>

<body>


    <?php include 'component/navbar.php'; ?>

    <div class="body-login">

        <div class="container-fluid">

                <h2 class="text-white" style="text-align:center">Acceder</h2>



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
                                                <input type="text" class="form-control" id="nombre" name="nombre" tabindex="1" placeholder="Escriba su nombre">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Email</h4>
                                                <input type="email" class="form-control" id="email" name="email" tabindex="3" placeholder="Escriba su email">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Contraseña</h4>
                                                <input type="password" class="form-control" id="email" name="email" tabindex="5" placeholder="Escriba una contraseña">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <h4>Apellidos</h4>
                                                <input type="text" class="form-control" id="nombre" name="nombre" tabindex="2" placeholder="Escriba sus apellidos">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Repetir email</h4>
                                                <input type="email" class="form-control" id="email" name="email" tabindex="4" placeholder="Repita su email">
                                            </div>
                                            <div class="form-group">
                                                <h4 for="nombre">Repetir contraseña</h4>
                                                <input type="password" class="form-control" id="email" name="email" tabindex="6" placeholder="Repita la contraseña">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox1" name="checkbox1" tabindex="7">
                                                <label class="form-check-label" for="checkbox1">
                                                    He leído y acepto la <a class="enlace-estilo" href="">política de privacidad</a> y los <a class="enlace-estilo" href=""> términos de uso
                                                        de la web</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md" style="text-align:center;">
                                                <button type="submit" class="btn-outline-dark btn-formulario mt-2" tabindex="8">Registrar</button>
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
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Indique su email">
                                </div>
                                <div class="form-group">
                                    <h4 for="nombre">Contraseña</h4>
                                    <input type="password" class="form-control" id="email" name="email" placeholder="Indique su contraseña">
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md" style="text-align:center;">
                                    <button type="submit" class="btn-outline-dark btn-formulario mt-2">Iniciar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="footer-login">

                <?php include 'component/footer.php'; ?>

            </div>

        </div>
    </div>
</body>

</html>