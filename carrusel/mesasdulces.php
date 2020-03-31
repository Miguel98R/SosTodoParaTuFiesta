<div id="carouselExampleControls4" class="carousel slide" data-ride="carousel" data-interval="100000000000">
  <div class="carousel-inner">


  <?php 
	 include("util/conexion.php");
	 $consulta = "SELECT* FROM mesasdulces WHERE id=1";
	 $result = $conn->query($consulta) or die (mysqli_error($conn));
	 while($datos=$result->fetch_assoc()){
?>
  <div class="carousel-item active">
    <img class="d-block w-100 py-2  borders" src="<?php echo $datos['ruta'];?>"  >
</div>
	
	<?php  }?>
    
  
   <?php 
	 include("util/conexion.php");
	 $consulta = "SELECT* FROM mesasdulces WHERE id>1";
	 $result = $conn->query($consulta) or die (mysqli_error($conn));
	 while($datos=$result->fetch_assoc()){
?>
  <div class="carousel-item">
    <img class="d-block w-100 py-2  borders" src="<?php echo $datos['ruta'];?>" >
</div>
	
	<?php  }?>
    
  
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 

