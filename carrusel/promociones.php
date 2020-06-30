<?php 
    
    
  include "util/conexion.php";
 $consulta = "SELECT ruta FROM promociones";
 $result = $conn->query($consulta) or die (mysqli_error($conn));


?>
 
 
 
<div class="py-3 container-fluid">

  <div class="col-sm-12 col-md-12  w-100 text-center ">

        <div class="container  my-5">
            <h2 class="display-4 text-center font-weight-bolder" id="services" style="font-size: 50px;">Promociones</h2>
            <img src="./img/menos.png" alt="">

            <h4 style="color: darksalmon;">Siempre pensamos en como ayudarte </h4>

        </div>


    </div>

  <div class="text-center">
    <h4>Girame <img src="./img/girar.png" width="30" height="30" ></h4>
  </div>
 <div class="row">

   <div class="col-md-2"></div> 
    <div class="col-md-8">
      <!-- Swiper -->
    <div class="swiper-container">
    <div class="swiper-wrapper">
<?php 
    while($datos=$result->fetch_assoc()){
?>

      <div class="swiper-slide">
        <img src="<?php echo $datos['ruta'];?>" class="promo"  >
    </div>
    <?php } ?>
    </div>
      <!-- Add Pagination -->
    <div class="swiper-pagination"></div>

    
  </div>

    </div> 
     <div class="col-md-2"></div> 
 
  

 </div> 




</div>


 

  
