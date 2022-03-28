<?php

/*
echo "<pre>";
print_r($_GET);
echo "</pre>";
*/
if ( isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2'])) {

  $numero1 = $_GET['numero1'];
  $numero2 = $_GET['numero2'];

  echo $numero1 + $numero2;
}

/*
echo "El numero 1 es: ".$numero1;
//echo "<br>";
echo "El numero 2 es: ".$numero2;
*/


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Calculadora</title>
   </head>
   <body>
     <h2>Calculadora Web</h2>
     <br>

     <form class="" action="calculadora.php" method="get">
       Valor 1<input type="number" name="numero1" value="" placeholder="Ingrese un numero" required><br><br>
       Valor 2<input type="number" name="numero2" value="" placeholder="Ingrese otro numero" required>
       <input type="submit" name="" value="CALCULAR">
     </form>
   </body>
 </html>
