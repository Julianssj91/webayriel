
<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " .$mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " .date('d/m/Y', time());

$para = 'ejmolianx91@gmail.com';
$asunto = 'Mensaje del sitio';

mail($para, $asunto, utf8_decode($mensaje), $header);

// header('Location:exito.html');
?>