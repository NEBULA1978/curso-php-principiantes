<?php
//$_GET['texto'];
$archivo = 'texto.txt';

if (isset($_GET['archivo'])) {
  $archivo = $_GET['archivo'];

  if ($_GET['archivo'] == 'Guardar') {
    file_put_contents($archivo, $_GET['texto']);
  }
}



$texto = file_get_contents('$archivo');

//echo $texto;
 ?>

<h1> Editar Archivo de Texto</h1>

<form>
  <label>Nombre del Archivo:</label>
  <input type="text" name="archivo" value="<?=$archivo?>" /><br/>
  <textarea name="texto"><?=$texto?></textarea>
  <br>
  <input type="submit" value="Guardar" name="accion" />
  <input type="submit" value="Cargar" name="accion" />
</form>

<style>
  textarea{
    margin: 0px;
width: 273px;
height: 189px;
  }
</style>
