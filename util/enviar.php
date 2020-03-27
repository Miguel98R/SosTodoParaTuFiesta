<?php

$pregunta1 = $_POST['PreguntaUno'];
$pregunta2 = $_POST['PreguntaDos'];
$pregunta3 = $_POST['PreguntaTres'];
$pregunta4 = $_POST['PreguntaCuatro'];
$pregunta5 = $_POST['PreguntaCinco'];
$pregunta6 = $_POST['PreguntaSeis'];
$pregunta7 = $_POST['PreguntaSiete'];
$pregunta8 = $_POST['PreguntaOcho'];
$pregunta9 = $_POST['PreguntaNueve'];

$destinatario = "miguelxbox3303@gmail.com";
$asunto="contacto desde nuestra web";

$carta ="En esta encuesta se tuvieron las siguientes respuestas: \n";
$carta .="1-. ¿Llegó a tiempo el personal? R=  $pregunta1 \n"; 
$carta .="2-. ¿El equipo  So´s se presentó o saludo al llegar ? R= $pregunta2 \n"; 
$carta .="3-. ¿Instalaron o dieron respuesta rápida en el servicio o producto de su elección? R= $pregunta3 \n"; 
$carta .="4-. ¿Le agrado el producto o servicio adquirido? R= $pregunta4 \n"; 
$carta .="5-. ¿Estaba limpio, bien instalado y en perfectas condiciones el producto o servicio? R= $pregunta5 \n"; 
$carta .="6-. ¿La decoración o servicio y fue lo que esperaba? R= $pregunta6 \n"; 
$carta .="7-. ¿Le agrado el trato del personal? R= $pregunta7 \n"; 
$carta .="8-. ¿Le dieron a mostraron el contrato previo del servicio adquirido? R= $pregunta8 \n"; 
$carta .="9-. Podría decirnos la puntuación del producto o servicio adquirido? R= $pregunta9 \n"; 

mail($destinatario,$asunto,$carta);
header('Location:../confirmacion.php');

?>