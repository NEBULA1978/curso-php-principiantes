<?php
//$alumnos['Maria'] = array('materias' => array ("Matematicas", 'Lengua') );
$alumnos = array(
  'Maria' => array(
    'materias' => array (
      "Matematicas" => array(
        "notas" => array(3,4,10,5)
      ),
       'Lengua' => array(
         "notas" => array(3,4,10,5)
    ))
  ),
  'Pedro' => array(
    'materias' => array (
      "Historia",
      'Ciencia naturales'
    )
  ),
  'Juan' => array(
    'materias' => array (
      "Contabilidad",
      'Quimica') ));

echo "<pre>";
print_r($alumnos/*['Maria']['materias']['Matematicas']['notas']*/);
echo "</pre>";


$alumnos['Pedro']['materias'][0] = "Matematicas";
//$alumnos['Pedro'] = array('materias' => array ("Historias", 'Ciencia naturales') );
//$alumnos['Juan'] = array('materias' => array ("Contabilidad", 'Quimica') );
//$alumnos['Vilma'] = array('materias' => array ("Cienecias Sociales", 'Matematica financiera') );


echo "<pre>";
print_r($alumnos['Pedro']);
echo "</pre>";





 ?>
