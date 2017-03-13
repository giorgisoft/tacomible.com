<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$comentarios = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $nombre . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";

$para = 'contacto@tacomible.com';
$asunto = 'Informacion';

header('Location: http://www.tacomible.com/#contact');

mail($para, $asunto, utf8_decode($message), $header);
echo "<script type=\"text/javascript\">alert(\"Hemos recibido su correo. En breve le responderemos. Gracias!!\");</script>";

?>
