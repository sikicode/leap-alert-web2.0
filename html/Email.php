<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 1;                                    
    $mail->isSMTP();                                     
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'email@someemail.com';                   
    $mail->Password   = 'password';                            
    $mail->SMTPSecure = 'ssl';   //Or TSL                              
    $mail->Port       = 465;     //Port #                             
    $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true     //Added to work with gmail
                    )
                );         
    $mail->setFrom('email@email.com', 'Sender name');
    $mail->addAddress('email@email.com', 'Reciever name');    
    
    $body = '<strong>Hello</strong> this is my first PHPMailer</p>';


    $mail->isHTML(true);                                 
    $mail->Subject = 'Testing testing 493!';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}