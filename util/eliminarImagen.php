<?php 

 include("conexion.php");

 $id=$_GET['id'];
 $servicio=$_GET['servicio'];



     $consultaBorrar="DELETE FROM $servicio WHERE id='$id'" ;
     $resultBorrar=$conn->query($consultaBorrar) or die (mysqli_error($conn));

    
        if($resultBorrar==true){
            echo'<script type="text/javascript">
            alert("Imagen eliminada con exito ");
            window.location.href="../dashboard.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Error al eliminar la imagen");
                window.location.href="../dashboard.php";
                </script>';
            }
        
     
   

?>