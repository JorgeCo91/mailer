<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$email = $_POST['correo'];
$phone  = $_POST['phone'];
$name  = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];
$message  = $_POST['comentarios'];

$emailDestinarario = 'jorgee.serrano91@gmail.com';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 1;
$mail->CharSet = 'UTF-8';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'jorgee.serrano91@gmail.com';
$mail->Password = 'rokanlover';
$mail->setFrom('no-reply@yoin.com.mx', 'Pagina Web Fotografía');
$mail->addAddress($emailDestinarario, 'Receiver Name');
$mail->isHTML(true); 
$mail->Subject = 'Formulario de contacto';
$mail->Body = <<<EOT
Email: {$email}
<br />
Nombre: {$name}
<br />
Apellidos: {$apellidos}
<br />
Telefono: {$phone}
<br />
Message: {$message}
EOT;
$mail->AltBody = 'This is a plain text message body';
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}