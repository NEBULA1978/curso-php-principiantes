<?php

/*
function imprime_saludo($saludo){
  echo $saludo."<br>" ;


}

imprime_saludo("Hola como estas");
imprime_saludo("Hola como estas");
imprime_saludo("Hola como estas");
imprime_saludo("Hola como estas");
*/


function suma($valor1, $valor2){
  return $valor1 + $valor2;

}

echo suma (10,20)."<br><br>";//concadeno con . y <br>salto de linea



function repite($cantidad,$mensaje){
  for ($i=0; $i < $cantidad; $i++) {
    echo $mensaje."<br>";
  }
}

repite(10,"Que buena funcion!222");

 ?>
