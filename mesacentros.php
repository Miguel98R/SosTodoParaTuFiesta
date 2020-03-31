<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>So's Todo Para Tus Fiestas</title>
   
    <link rel="shortcut icon" href="img/favicon.ico" />
   <link rel="stylesheet" href="css/style2.css"/> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
	  

    <script src="https://kit.fontawesome.com/b46c20e3c5.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->  
</head>
<body>

<?php include ("components/navGalerias.php"); ?>
 
<?php include ("components/botones.php"); ?>

<header ><div class="py-3 container-fluid" style="background-color: #FEE140;
background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
" >
  <div class="row">
    <div class="col-lg-4 col-md-12 col-xs-4 col-12 text-center d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks "><img src="./img/logo.jpg" class="rounded-circle img-fluid py-3" alt=""  style="width:85%; height:auto" /></div>
    <div class="col-lg-8 col-md-12 col-xs-8 col-12 text-center"> 
        <h1 class="font-weight-bolder" style="display: flex;justify-content: center;margin: 15vh 1px;width: 100%;font-size:50px;
  color:white;">Centros De Mesa</h1>

</div>
  </div>
  
</div>


</header>

<div class="container-fluid" >
	  <div class="col-sm-12 col-md-12  w-100 text-center " id="services">
                    <div class="jumbotron jumbotron-fluid bg-white ">
  <div class="container ">
    <h2 class="display-4 text-center font-weight-bolder ">Galeria de imagenes </h2>
     <div ><img src="./img/menos.png" alt=""></div>
    <h4 style="color:darksalmon;">Un vistazo a nuestro producto</h4>
    
  </div>
</div>
    
  </div>
</div>

<div class="container ">
	<div class="row">
	 <?php 
	 include("util/conexion.php");
	 $consulta = "SELECT* FROM mesascentros";
	 $result = $conn->query($consulta) or die (mysqli_error($conn));
	 while($datos=$result->fetch_assoc()){
?>
 <div class="col-lg-4 col-md-12 col-sm-12  px-2 justify-content-center">
    <img style="z-index: 100;height: 330px;border-radius: 10%;" class=" d-block w-100 py-2 zoom" src="<?php echo $datos['ruta'];?>" ' >
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
 
 
 
 