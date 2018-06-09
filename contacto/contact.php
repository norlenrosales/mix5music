<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'norlenrosales@gmail.com';
$titulo = 'Mix5';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
// echo "<script language='javascript'>
// alert('Mensaje enviado, muchas gracias.');
// window.location.href = 'http://TUSITIOWEB.COM';
// </script>";
	echo "<center>Thank you, We'll contact you asap.</center>";
} else {
	echo "<center>Call 786 709 3771</center>";
}
}
?>