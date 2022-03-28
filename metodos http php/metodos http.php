<?php
/*
GET
POST
DELETE
PUT
PATCH
*/
if (!isset($_GET["nombre"])) {
  die("Necesita ingresar un nombre");
  }
if (!isset($_GET["telefono"])) {
  die("Necesita ingresar un apellido");
}

if (!isset($_GET["email"])) {
  die("Necesita ingresar un apellido");
}

if (!isset($_GET["mensaje"])) {
  die("Necesita ingresar un apellido");
}

$nombre = $_GET["nombre"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];
$mensaje = $_GET["mensaje"];

$to      ='rpascualet@gmail.com';
$subject = 'Consulta desde la web';
$body = 'Nueva consulta desde la web.' . "\r\n";
$body .= 'Nombre: ' . $nombre . "\r\n";
$body .= 'telefono: ' . $telefono . "\r\n";
$body .= 'Email: ' . $email . "\r\n";
$body .= 'Mensaje: ' . $mensaje . "\r\n";


$headers .= 'From:  ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversio();

mail($to, $subject, $message, $headers);

//  echo $_GET["nombre"];
//  echo $_GET["apellido"];






//http://localhost/curso/metodos%20http%20php/metodos%20http.php?nombre=Ramon&apellido=Pascual&edad=43&email=asassd.com
 ?>
