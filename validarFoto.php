<?php 

include ('util/conexion.php');

$servicio = $_POST['servicio'];

$image = $_FILES['image']['name'];
$ruta = $_FILES['image']['tmp_name'];


$destino=  "img/".$servicio."/".$image ;

copy($ruta, $destino);

$sql = "
   INSERT INTO $servicio (ruta)
   VALUES('$destino');
";
$result = $conn->query($sql) or die (mysqli_error($conn));
	 
if($result==true){
    echo'<script type="text/javascript">
        alert("Imagen guardada con exito");
        window.location.href="admin.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("Error al guardar foto");
        window.location.href="admin.php";
        </script>';
}





?>

