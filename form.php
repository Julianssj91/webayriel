
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
$to = "ejmolinax91@gmail.com";
$subject = "Nuevo mensaje desde el formulario de contacto";
$message = implode("\n\n", $_POST);
$headers = "From: " . $_POST["name"] . " <" . $_POST["email"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

?>