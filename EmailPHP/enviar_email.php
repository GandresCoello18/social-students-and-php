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
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'goyeselcoca@gmail.com';                     // SMTP username
    $mail->Password   = 'realg4life10';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('goyeselcoca@gmail.com', 'Andres Coello');
    $mail->addAddress($correo);     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Te damos la Bienvenida';
    $mail->Body    = '<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
</head>
<style type="text/css">
    .cuerpo{
    font-family: "Dosis", sans-serif;
    background-color: #F6F4F4;
    color: #000;
    }
    .curso{
        width: 100%;
        height: 100px;
    }
    .social{
        position: relative;
        left: 60px; 
        width: 30px;
        height: 30px;
    }
    #fila_social{
        position: relative;
        left: 40px;
    }
    a{
        text-decoration: none;
        color: #E3AA5A;
        font-weight: bold;
    }
    a p{
        text-align: center;
    }

@media screen and (min-width: 544px){
    .curso{
        width: 180px;
    }
}

@media screen and (min-width: 768px){
    .curso{
        width: 200px;
        height: 160px;
    }
}
@media screen and (min-width: 992px){
    .curso{
        width: 250px;
        height: 200px;
    }
}
@media screen and (min-width: 1200px){
    
}

</style>
<body>
    <table border="0" width="100%" class="cuerpo">
        <tr>
            <td style="border-bottom: 1px #E3AA5A solid; text-align: center; padding: 8px;">Nos alegra que formes parte de <strong>Social Students</strong></td>
        </tr>
        <tr>
            <td style="background-color: #E3AA5A; padding: 10px; border-bottom: 1px #E3AA5A solid;">Hola, <?php echo $nombre; ?>  Para empezar te recomendamos estos cursos</td>
        </tr>
        <tr>
            <td>
                <table border="0">
                    <tr>
                        <td>
                            <img src="http://social-students.herokuapp.com/img/c++.webp" target="_blanck" class="curso">
                        </td>
                        <td>
                            <img src="http://social-students.herokuapp.com/img/fundamentos-ing-software.webp" target="_blanck" class="curso">
                        </td>
                        <td>
                            <img src="http://social-students.herokuapp.com/img/javascript.webp" target="_blanck" class="curso">
                        </td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px #E3AA5A solid;">
                            <p>Programacion estructurada con C++</p>
                        </td>
                        <td style="border-bottom: 1px #E3AA5A solid;">
                            <p>Fundamentos de Ingenieria de Sotfware</p>
                        </td>
                        <td style="border-bottom: 1px #E3AA5A solid;">
                            <p>Programacion web con JavaScript</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://social-students.herokuapp.com/perfil-serie-cursos?tema=4" target="_blanck"><p>Empezar</p></a>
                        </td>
                        <td>
                            <a href="https://social-students.herokuapp.com/perfil-serie-cursos?tema=5" target="_blanck"><p>Empezar</p></a>
                        </td>
                        <td>
                            <a href="https://social-students.herokuapp.com/perfil-serie-cursos?tema=9" target="_blanck"><p>Empezar</p></a>
                        </td>
                    </tr>
                </table>
                <tr>
                    <td style="padding: 10px;">Conoce todo nuestros cursos en <a href="https://social-students.herokuapp.com/cursos">este enlace</a></td>
                </tr>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0">
                    <tr id="fila_social">
                        <td style="padding: 10px;"><a href="https://www.facebook.com/andres.coellogoyes" target="_blanck"><img src="https://simply-communicate.com/wp-content/uploads/2019/03/facebook-2661207_960_720.jpg" class="social"></a></td>
                        <td style="padding: 10px;"><a href="https://www.instagram.com/coellogoyes/?hl=es-la" target="_blanck"><img src="https://cdn.pixabay.com/photo/2016/08/09/17/52/instagram-1581266_960_720.jpg" class="social"></a></td>
                        <td style="padding: 10px;"><a href="https://www.youtube.com/channel/UCHWsGkCRqlNKnoxYkC_ZRxQ?view_as=subscriber" target="_blanck"><img src="https://image.flaticon.com/icons/svg/174/174883.svg" class="social">YouTube</a></td>
                    </tr>
                </table>                
            </td>
        </tr>
    </table>
</body>
</html>';

    $mail->send();
    //echo 'Todo correcto';
} catch (Exception $e) {
    echo "ocurrio un error: {$mail->ErrorInfo}";
}