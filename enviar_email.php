

<!-- *** Assunto sobre Emails cancelados -->

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Crie uma instância; passar `true` permite exceções
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'alfredomello.p2@gmail.com';          //SMTP username
    $mail->Password   = 'R@fael1524';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Destinatários
    $mail->setFrom('smtp.gmail.com', 'Empresa');
    $mail->addAddress($email, 'Destinatário');     //Add a recipient

    //Conteúdo
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $assunto;
    $mail->Body    = $mensagem;

    $mail->send();
    echo 'Mensagem enviada com sucesso ';
} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
}