<?php
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/POP3.php";
include "PHPMailer/src/SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function send_email($to, $subject, $message) {
    $mail = new PHPMailer(true);        
    try {
        $mail->Host = 'smtp.gmail.com;';                        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                // Enable SMTP authentication
        $mail->Username = 'tinhph74@gmail.com';                 // SMTP username
        $mail->Password = 'nhflssomretdsqccxc';                           // SMTP password
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        //Recipients
        $mail->setFrom('tinhph74@gmail.com', 'Mailer');
        $mail->addAddress($to, 'Joe User');     // Add a recipient
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    =  $message;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
  }
?>

