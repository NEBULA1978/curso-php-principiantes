<?php
//                  0       1      2     3   4
$alumnos = array("Maria","Juan","Pedro",34,true);

//array posicional depende del indice empieza por 0 el 1°
//echo $alumnos[0];
//echo $alumnos[2];

//array relacional
$alumno = array('nombre' => "Pablo", 'direccion' => 'Alvear 100', 'telefono' => 0351666777 );


//echo $alumno['direccion'];
//para imprimir array completo print_r
//echo "<pre>";//me sale mas oredenado
//print_r($alumno);
//echo "</pre>";//me sale mas ordenado

/*
//para imprimir array completo print_r
echo "<pre>";//me sale mas oredenado
print_r($alumnos);
echo "</pre>";//me sale mas ordenado
*/

//modificar nombre en array posicional

echo $alumnos[1];
$alumnos[1]="Manuel";
echo "<br>";
echo $alumnos[1];

//para arrays relacional
//echo $alumnos['nombre'];

 // video 10 arrays multidimensionales
//alumnos inscritos


 ?>
