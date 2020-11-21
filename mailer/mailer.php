<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer;

$mail->From = "hasanakash0215@gmail.com";
$mail->FromName = "Kamrul Hasan";

$mail->addAddress("hasanakashiotupload@gmail.com", "hasan akash");

//Provide file path and name of the attachments
$mail->addAttachment("image/a.jpg"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
