<?php
include("util/conexion.php");

$consulta="SELECT COUNT(*) AS cuenta FROM brincolin" ; 
$result=$conn->query($consulta) or die (mysqli_error($conn));


$numero = mysqli_fetch_assoc($result);

$numeroReg = (string) $numero['cuenta'];

echo $numeroReg;


    ?>