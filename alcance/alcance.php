<?php

/*
$edad = 8;
//echo $edad;

function prueba(){
   $edad=10;
 echo $edad;
}
*/

/*
//se puede organizar mejor con nombres aclarativos
$edad = 8;
//echo $edad;

function prueba($edad){

 echo $edad;
}

prueba($edad);
*/

/*
function prueba($valor_edad){
  echo $valor_edad;
}

$edad = 8;
prueba($edad);
*/

/*
$edad = 8;

function modifica($cantidad){
   global $edad;llamamos a la variable global importante
  $edad = $edad + $cantidad;
}

modifica (4);
echo $edad;
*/

$edad = 12;

function modifica($cantidad){//superglobales
   $GLOBALS  ['edad'] = $GLOBALS['edad'] + $cantidad;

}

modifica (8);
echo $edad;

 ?>
