<?php include "components/head.php" ?>
<body>

    <?php include ("components/botones.php"); ?>

    <?php include ("components/navGalerias.php"); ?>



    <header>
        <div class="py-3 container-fluid" style="background-color: #FEE140;
background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
">
            <div class="row">
                <div
                    class="col-lg-4 col-md-12 col-xs-4 col-12 text-center d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks ">
                    <img src="./img/logo.jpeg" class="rounded-circle img-fluid py-3" alt=""
                        style="width:85%; height:auto" /></div>
                  <div class="col-lg-8 col-md-12 col-xs-8 col-12 text-center py-5"> 
        <h1 class="font-weight-bolder" style="display: flex;justify-content: center;width: 100%;font-size:50px;
  color:white;">Velas personalizadas</h1>
    <p class="font-weight-bolder font-italic" style="display: flex;justify-content: center;width: 100%;font-size:20px;
  color:white;">Porque ... "la calidad no esta peleada con el precio."</p>


</div>
            </div>

        </div>


    </header>

        <div class="container-fluid py-3">
        <div class="col-sm-12 col-md-12  w-100 text-center " id="services">
         
                <div class="container ">
                    <h2 class="display-4 text-center font-weight-bolder ">Galeria de imagenes </h2>
                    <div><img src="./img/menos.png" alt=""></div>
                    <h4 style="color:darksalmon;">Un vistazo a nuestro producto</h4>

                </div>
         

        </div>
    </div>

    <div class="container">
        <div class="card-columns">
            <?php 
                 include("util/conexion.php");
                $consulta = "SELECT* FROM velas ORDER BY id DESC";
                $result = $conn->query($consulta) or die (mysqli_error($conn));
                while($datos=$result->fetch_assoc()){

            ?>
           <div class="" style="border:none;">
                 <img style="border-radius: 30px;border:none;"" class="zoom  img-thumbnail"
                    src="<?php echo $datos['ruta'];?>">
            </div>
            <?php  }?>

        </div>

    </div>


    <?php include ("components/otroServicios.php"); ?>

    <?php include ("components/contacto.php"); ?>


    <?php include ("components/footerGalerias.php"); ?>

   

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