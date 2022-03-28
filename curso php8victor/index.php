<h1>Codigo HTML</h1>

<?php
  //esto de abajo va a imprimir:echo y print
  echo "<h1>Codigo PHP</h1>";
  print("Hola");

  echo "<!--COMENTARIO HTML-->";//no se ve en la pagina pero si en la consola

  //variables
  //$nombre = "Ramon Pascual";
  $nombre = $_POST["nombre"];
  $texto = "Repaso de PHP8 de la web con $nombre";
  $altura = 187;

  //concadenamos con . abajo streams con enteros
  //echo "<h1>".$texto.", su altura es:".$altura."cm</h1>";

  $textofinal = "<h1>".$texto.", su altura es:".$altura."cm</h1>";

  echo $textofinal;
  echo $textofinal;
  echo $textofinal;
  echo $textofinal;

  $textofinal .= "Te he troleado my bro";//concadenamos con .= añadiendo texto
  echo $textofinal;

  //GET
  echo "<hr>";
  echo $_POST["nombre"];


 ?>
