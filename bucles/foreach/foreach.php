<?php

$meses = array(
'enero' =>1000,
'febrero' =>1000,
'marzo' =>1000,
'abril' =>1000,
'mayo' =>1000,
'junio' =>1000,
'julio' =>1000,
'agosto' =>1000,
'septiembre' =>1000,
'octubre' =>1000,
'noviembre' =>1000,
'diciembre' =>1000,

);

foreach ($meses as $mes => $value) {
//  echo "Este es el mes de: ".$mes. " y la ganacia fue de ".$value."<br>";
}

/*
echo "<br><br><br>";
echo "<pre>";
print_r($meses);
echo "</pre>";
*/

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ganancias</title>
   </head>
   <style media="screen">
     table, th , td{

       border: 1px solid black;
       border-collapse: collapse;

     }

     th, td {
       padding: 5px;
       text-align-last: left;
     }

   </style>
   <body>

     <h2>Ganancias</h2>
     <br><br>

     <table>
       <tr>
         <th>Mes</th>
         <th>Monto</th>
       </tr>
<?php foreach ($meses as $mes => $value) { ?>

       <tr>
         <td><?php echo $mes; ?></td>
         <td><?php echo $value; ?></td>
       </tr>
<?php } ?>

     </table>



   </body>
 </html>
