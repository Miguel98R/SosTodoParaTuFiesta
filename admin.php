<?php include "components/head.php" ?>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center justify-content-center align-content-center">
                <div class="peach-gradient text-center my-5 " style="border-radius:20px;">
                    <div class="text-center py-3 px-5">
                        <img class="rounded-circle img-fluid logo" src="img/logo.jpeg" alt="" width="200" height="200">
                    </div>
                    <div class="text-center ">
                        <h2 class="font-weight-bolder text-white">Iniciar sesión</h2>
                    </div>

                    <form action="util/loginValidation.php" method="post" onsubmit="return validar();">
                        <div class="text-center py-3 px-5">
                            <div class="py-2"><input class="inputDato" type="text" id="user" name="user"
                                    placeholder="Ingresa tu usuario"></div>
                            <div><input class="inputDato" type="password" id="psw" name="psw"
                                    placeholder="Ingresa tu contraseña">
                            </div>


                        </div>
                        <div class="py-3">
                            <button class="button2 " type="submit">Entrar</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <?php include("components/footerAdmin.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/loginValidation.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js">
    </script>
    <script src="js/popper.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>


</body>



</html>