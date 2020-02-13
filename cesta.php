<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'component/head.html'; ?>

</head>

<body>

    <?php include 'component/navbar.php'; ?>


    <div class="body-cesta">

        <div class="container-fluid">

            <center>
                <h2 class="text-white ">Cesta</h2>
            </center>


            <div class="row justify-content-center contacto mt-5 ml-4 mr-4">
                <div class="col-lg-8">
                    <form>
                        <div class="container-fluid text-start text-md-left entradas">
                            <div class="card col-lg card-entrada">
                                <div class="card-body cuerpo-cesta">

                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <div class="texto-entrada">
                                                <div class="form-group">
                                                    <h2>Total precio:<span class="ml-5" id="precio-total">0€</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form>
                        <div class="container-fluid text-start text-md-left entradas">
                            <div class="card col-lg card-entrada">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="texto-entrada">
                                                    <div class="form-group">
                                                        <h4>Envio:</h4>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="ml-5">Envio en 1 dia</p>
                                                        <p class="ml-5">Envio en 1 semana dia</p>
                                                        <p class="ml-5">Envio estandar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="texto-entrada">
                                                    <div class="form-group">
                                                        <h4>Dirección:</h4>
                                                    </div>
                                                    <div class="form-group">
                                                        <p>IES Francisco Romero Vargas</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <button type="submit" class="btn-outline-dark btn-cesta">Realizar pedido</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="footer-blog">

                <?php include 'component/footer.php'; ?>

            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scriptcesta.js"></script>

</body>

</html>