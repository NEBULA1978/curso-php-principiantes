<?php

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
if ( isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {

  $peso = $_POST['peso'];
  $altura = $_POST['altura'];

  //echo $peso + $altura;
  $imc = $peso / ($altura*$altura);
  $imc = round($imc,1);

  $resultado = "";
  $color="";

  if ($imc<18.5) {
    $resultado = "Peso inferior al normal";
    $color="orange";
  }


  if ($imc >= 18.5 && $imc < 24.9) {
    $resultado = "Normal";
    $color="green";
  }


  if ($imc >= 24.9 && $imc < 29.9) {
    $resultado = "Peso superior al normal";
    $color="yellow";
  }

  if ($imc>30) {
    $resultado = "Obesidad";
    $color="orange";
  }
//  echo round($imc,1);//funcion para decirle decimales queremos yeea


 <?php

 /*
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";
 */
 if ( isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {

   $peso = $_POST['peso'];
   $altura = $_POST['altura'];

   //echo $peso + $altura;
   $imc = $peso / ($altura*$altura);
   $imc = round($imc,1);

   $resultado = "";
   $color="";

   if ($imc<18.5) {
     $resultado = "Peso inferior al normal";
     $color="orange";
   }


   if ($imc >= 18.5 && $imc < 24.9) {
     $resultado = "Normal";
     $color="green";
   }


   if ($imc >= 24.9 && $imc < 29.9) {
     $resultado = "Peso superior al normal";
     $color="yellow";
   }

   if ($imc>30) {
     $resultado = "Obesidad";
     $color="orange";
   }
 //  echo round($imc,1);//funcion para decirle decimales queremos yeea

 }

 /*
 echo "El numero 1 es: ".$peso;
 //echo "<br>";
 echo "El numero 2 es: ".$altura;
 */


  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Calculadora IMC</title>
    </head>
    <body>
      <h2>Calculadora tu IMC</h2>
      <h3>No es belleza es salud!</h3>
      <br>

      <form class="" action="imc.php" method="POST">
        peso (kg)<br> <input type="number" step=".01" name="peso" value="" placeholder="Tu peso en kilogramos" required><br><br>
        Altura (m)<br> <input type="number" step=".01" name="altura" value="" placeholder="Tu altura en metros" required>
        <input type="submit" name="" value="CALCULAR">
      </form><br>

      <?php if (isset($imc)) { ?>
        <?php echo "Tu I.M.C es de -> ".$imc; ?>
          <br>
          <div style="color:<?php echo $color;?>">Resultado: <?php echo $resultado; ?></div>
      <?php } ?>





    </body>
  </html>



}

/*
echo "El numero 1 es: ".$peso;
//echo "<br>";
echo "El numero 2 es: ".$altura;
*/


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Calculadora IMC</title>
   </head>
   <body>
     <h2>Calculadora tu IMC</h2>
     <h3>No es belleza es salud!</h3>
     <br>

     <form class="" action="imc.php" method="POST">
       peso (kg)<br> <input type="number" step=".01" name="peso" value="" placeholder="Tu peso en kilogramos" required><br><br>
       Altura (m)<br> <input type="number" step=".01" name="altura" value="" placeholder="Tu altura en metros" required>
       <input type="submit" name="" value="CALCULAR">
     </form><br>

     <?php if (isset($imc)) { ?>
       <?php echo "Tu I.M.C es de -> ".$imc; ?>
         <br>
         <div style="color:<?php echo $color;?>">Resultado: <?php echo $resultado; ?></div>
     <?php } ?>


      <?php

      /*
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";
      */
      if ( isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        //echo $peso + $altura;
        $imc = $peso / ($altura*$altura);
        $imc = round($imc,1);

        $resultado = "";
        $color="";

        if ($imc<18.5) {
          $resultado = "Peso inferior al normal";
          $color="orange";
        }


        if ($imc >= 18.5 && $imc < 24.9) {
          $resultado = "Normal";
          $color="green";
        }


        if ($imc >= 24.9 && $imc < 29.9) {
          $resultado = "Peso superior al normal";
          $color="yellow";
        }

        if ($imc>30) {
          $resultado = "Obesidad";
          $color="orange";
        }
      //  echo round($imc,1);//funcion para decirle decimales queremos yeea

      }

      /*
      echo "El numero 1 es: ".$peso;
      //echo "<br>";
      echo "El numero 2 es: ".$altura;
      */


       ?>

       <!DOCTYPE html>
       <html lang="en" dir="ltr">
         <head>
           <meta charset="utf-8">
           <title>Calculadora IMC</title>
         </head>
         <body>
           <h2>Calculadora tu IMC</h2>
           <h3>No es belleza es salud!</h3>
           <br>

           <form class="" action="imc.php" method="POST">
             peso (kg)<br> <input type="number" step=".01" name="peso" value="" placeholder="Tu peso en kilogramos" required><br><br>
             Altura (m)<br> <input type="number" step=".01" name="altura" value="" placeholder="Tu altura en metros" required>
             <input type="submit" name="" value="CALCULAR">
           </form><br>

           <?php if (isset($imc)) { ?>
             <?php echo "Tu I.M.C es de -> ".$imc; ?>
               <br>
               <div style="color:<?php echo $color;?>">Resultado: <?php echo $resultado; ?></div>
           <?php } ?>





         </body>
       </html>




   </body>
 </html>
