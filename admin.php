<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
      <link rel="stylesheet" href="css/style2.css"/> 
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="shortcut icon" href="img/favicon.ico" />
   
    <script src="https://kit.fontawesome.com/b46c20e3c5.js" crossorigin="anonymous"></script>

</head>
<body>


<?php include("components/navAdmin.php"); ?>
<header >

<div class="py-3 container-fluid" style="background-color: #FEE140;
background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
" >
  <div class="row">
    <div class="col-lg-4 col-md-12 col-xs-4 col-12 text-center d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks "><img src="./img/logo.jpg" class="rounded-circle img-fluid py-3" alt=""  style="width:85%; height:auto" /></div>
    <div class="col-lg-8 col-md-12 col-xs-8 col-12 text-center"> 
        <h1 class="font-weight-bolder" style="display: flex;justify-content: center;margin: 15vh 1px;width: 100%;font-size:50px;
  color:white;">Administración de imagenes So´s</h1>


</div>
    

  </div>
  
</div>
</header>

  

<div class="container-fluid py-4">
   
 <div class=" container text-center my-5 ">
   <h2 class="display-4 text-center font-weight-bolder"  >¿Que deceas hacer?</h2>
  <img src="./img/menos.png" alt="">
     <div class="row my-5">
         <div class="col-md-6 col-sm-12 my-1">
            
          <?php include("components/subirImagen.php") ?>
         </div>
        <div class="col-md-6 col-sm-12 my-1 ">
            <a  href="./porcelanicron.php" class="button2" >Eliminar imagenes</a>
             
                   
         </div>
     </div>
      </div>
     
</div>


<?php include("components/footerAdmin.php") ?>

 <script src="js/adminValidation.js"></script>

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