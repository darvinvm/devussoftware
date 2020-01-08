<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$tel = $_POST['tel'];
$mensage = $_POST['mensage'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su Telefono: " . $tel . " \r\n";
$mensaje .= "E-mail: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensage'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'info@devus.software';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");
?>