<div id="carouselExampleControlsflores" class="carousel slide carousel-fade"  data-ride="carousel" data-interval="100000000000">
    <div class="carousel-inner">


        <?php 
     include("util/conexion.php");

     $registros = "SELECT COUNT(*) AS cuenta FROM flores" ; 
     $resultReg=$conn->query($registros) or die (mysqli_error($conn));
     $numero = mysqli_fetch_assoc($resultReg);
     $numeroReg = (string) $numero['cuenta'];

     
	 $consulta = "SELECT MIN(id),ruta FROM flores";
     $result = $conn->query($consulta) or die (mysqli_error($conn));
   
     
     if($numeroReg!=0){
         	 while($datos=$result->fetch_assoc()){
?>
        <div class="carousel-item active">
            <img class=" d-block w-100 py-2  borders" src="<?php echo $datos['ruta'];?>">
        </div>

        <?php  }?>

        <?php }else if($numeroReg==0) {
            ?>
        <div class="carousel-item active">
            <img class=" d-block w-100 py-2  borders" src="img/lost.png">
        </div>

        <?php }?>

        <?php 
         $registros = "SELECT COUNT(*) AS cuenta FROM flores" ; 
     $resultReg=$conn->query($registros) or die (mysqli_error($conn));
     $numero = mysqli_fetch_assoc($resultReg);
     $numeroReg = (string) $numero['cuenta'];

     $limite = $numeroReg-1;
    
        $consult="SELECT * FROM flores";
        $resultado = $conn->query($consult) or die (mysqli_error($conn));
        

        if($numeroReg>=2){

            $consulta = "SELECT * FROM flores ORDER BY id DESC LIMIT $limite";
        }else if($numeroReg<2){
             $consulta = "SELECT * FROM flores ORDER BY id DESC LIMIT 0";
        }

       
        
        $result = $conn->query($consulta) or die (mysqli_error($conn));
        while($datos=$result->fetch_assoc()){
            
?>
        <div class="carousel-item">
            <img class="d-block w-100 py-2  borders" src="<?php echo $datos['ruta'];?>">
        </div>

        <?php  }?>


    </div>

    <a class="carousel-control-prev" href="#carouselExampleControlsflores" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControlsflores" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>