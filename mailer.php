<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer;

$mail->From = "example@gmail.com";
$mail->FromName = "example example";

$mail->addAddress("example1@gmail.com", "example1 example1");

//Provide file path and name of the attachments
$mail->addAttachment("image/a.jpg"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    {
      header("refresh:0; url=ITB.php");
      $message ="Message has been sent successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    echo "Message has been sent successfully";
} catch (Exception $e) {
  $message ="Mailer Error: Message has not been sent ";
      echo "<script type='text/javascript'>alert('$message');</script>";
}
