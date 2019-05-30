<?php

use EmailPHP\PHPMailer;
use EmailPHP\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'goyeselcoca@gmail.com';                     // SMTP username
    $mail->Password   = 'realg4life10';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('goyeselcoca@gmail.com', 'Andres Coello');
    $mail->addAddress('goyeselcoca@gmail.com', 'probando');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'este es el asunto';
    $mail->Body    = '<b>este es un texto en negritas con html</b>';

    $mail->send();
    echo 'Todo correcto';
} catch (Exception $e) {
    echo "ocurrio un error: {$mail->ErrorInfo}";
}