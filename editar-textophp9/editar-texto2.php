<?php

$archivo = 'texto.txt';
$texto = file_get_contents('$archivo');

file_put_contents('$archivo', 'Texto modificado');

//echo $texto;
 ?>


<h1> Editar Archivo de Texto</h1>

<form >
  <input type="text" value="nombre" />
  <input type="text" value="apellido" />
  <input type="text" value="telefono" />
  <input type="hidden" name="dato" value="dfsdffddf">
  <textarea name="texto">
  <?=$texto?>
  </textarea>
  <br>

  <input type="submit" value="Guardar" />
</form>
