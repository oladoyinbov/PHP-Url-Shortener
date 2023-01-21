<?php
require "autoloader.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["to"]) && isset($_POST["subject"]) && isset($_POST["message"])){
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = $_POST["name"];
$to = $_POST["to"];
$subject = $_POST["subject"];
$message = $_POST["message"];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = __mail_host__;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;   
    $mail->SMTPDebug = 2;                                //Enable SMTP authentication
    $mail->Username   = __mail_user__;                     //SMTP username
    $mail->Password   = __mail_password__;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = __mail_port__;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(__site_email__, __site_name__);
    $mail->addAddress($to, $name);     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}


?>