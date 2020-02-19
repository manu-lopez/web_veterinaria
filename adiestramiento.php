<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/head.html'; ?>
</head>

<body>


    <?php include 'component/navbar.php'; ?>

    <div class="body-contacto body-contacto">

        <div class="container-fluid">


            <h2 class="text-white" style="text-align:center">Adiestramiento para mascotas</h2>

            <div class="row justify-content-center contacto mt-5 ml-4 mr-4">
                <div class="col-lg-4">
                    <!-- <div style="text-align:center"> -->
                    <img class="mt-5 w-100" src="imagenes/adiestramiento.png" alt="Perro siendo adiestrado">

                    <!-- <img class="mt-5 " style="height: 20rem;" src="imagenes/adiestramiento.jpg" alt="Perros en la guardería"> -->
                    <!-- </div> -->
                </div>
                <div class="col-lg-8">
                    <h5 class="text-white mt-5 " style="text-align:center">¿Te apasionan los perros? ¿Te gustaría conocerlos para trabajar con ellos?
                        <p class="text-white mt-3" style="text-align:center"> Entonces nuestro curso de adiestramiento y educación canina es lo que estás buscando.</p>
                        <p class="text-white mt-3" style="text-align:center"> Si te gustan los perros y quieres trabajar como adiestrador, con nuestro curso de adiestramiento canino en poco tiempo serás un profesional destacado en el sector.
                        </p>
                        <p class="text-white mt-3" style="text-align:center"> Esta formación teórico-práctica te transmitirá todos los conocimientos para que puedas desarrollarte como profesional del adiestramiento canino y también te permitirá asesorar a los propietarios en la educación de su perro.
                        </p>
                        <p class="text-white mt-3" style="text-align:center"> Con este curso dominarás las mejores técnicas de adiestramiento de perros y trabajarás la modificacion de conductas inapropiadas del perro.
                        </p>
                    </h5>
                </div>
            </div>




            <h4 class="text-white mt-5" style="text-align:center">Para más información rellene el formulario de abajo.</h4>



            <div class="row justify-content-center contacto mt-5 ml-4 mr-4">
                <div class="col-lg-8">
                    <form>
                        <div class="container-fluid text-center text-md-left ">
                            <div class="card col-lg-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <h4>Nombre</h4>
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Indique su nombre">
                                            </div>
                                            <div class="form-group">
                                                <h4>Email</h4>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Indique su email">
                                            </div>

                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <h4>Teléfono</h4>
                                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Indique su teléfono">
                                            </div>
                                            <div class="form-group">
                                                <h4>Elegir fecha</h4>
                                                <input type="date" class="form-control" id="telefono" name="telefono" placeholder="Indique su teléfono">
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <h4>Comentarios</h4>
                                                <textarea class="form-control" rows="3" id="comentarios" name="comentarios" placeholder="Escriba el mensaje a enviar"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row">
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

            </div>

            <div class="footer-inicio">

                <?php include 'component/footer.php'; ?>

            </div>

        </div>
    </div>
</body>

</html>