<?php
//$saludo = "Hola, bienvenido a este curso";
//echo "$saludo;"

$saludo = "Hola, bienvenido a la pagina de loteria ";
$ganador = "el ganador es el numero 7766";
$mensaje = "El ganador es el numero ";

//echo $saludo.$mensaje.$ganador;//con punto concadeno streams
//echo "el numero ganador es $ganador";//es lo mismo que abajo
echo "el numero ganador es ".$ganador;

//echo 'el numero ganador es $ganador ';//las comillas simples no me permiten
// utilar variables como tales va a salir el texto (ojito)
//echo ' el numero ganador es '.$ganador; tambien se puede concadenar despues comillas simples

//echo " y ese dia juan le dijo a maria 'vete de aqui' "; opcion regular
echo ' y ese dia juan le dijo a maria "vete de aqui" ';

echo " y ese dia juan le dijo a maria 'vete de aqui' ";//comillas simples

echo " y ese dia juan le dijo a maria \"vete de aqui\" ";//bueno para solo utilzar comillas dobles

echo '<div style="color:red"> Hola Mundo</div>';//codigo html dentro php7

 ?>
