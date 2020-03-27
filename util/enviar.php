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
$asunto="Resultados de la encuesta realizada desde nuestra web";

$carta ="En esta encuesta se tuvieron las siguientes respuestas: \n\n";
$carta .="1-. ¿Llegó a tiempo el personal? R= \n $pregunta1 \n\n"; 
$carta .="2-. ¿El equipo  So´s se presentó o saludo al llegar ? R= \n $pregunta2 \n\n";
$carta .="3-. ¿Instalaron o dieron respuesta rápida en el servicio o producto de su elección? R= \n $pregunta3 \n\n";
$carta .="4-. ¿Le agrado el producto o servicio adquirido? R= \n $pregunta4 \n\n";
$carta .="5-. ¿Estaba limpio, bien instalado y en perfectas condiciones el producto o servicio? R= \n$pregunta5 \n\n"; 
$carta .="6-. ¿La decoración o servicio y fue lo que esperaba?R= \n $pregunta6 \n\n";
$carta .="7-. ¿Le agrado el trato del personal?R= \n $pregunta7 \n\n";
$carta .="8-. ¿Le dieron a mostraron el contrato previo del servicio adquirido? R= \n $pregunta8 \n\n";
$carta .="9-. Podría decirnos la puntuación del producto o servicio adquirido? R= \n $pregunta9 \n\n";

mail($destinatario,$asunto,$carta);
header('Location:../confirmacion.php');

?>