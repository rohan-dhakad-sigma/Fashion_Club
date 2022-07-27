<?php
require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];

// Email(success) function is called here. 
success($email);

function success($email){

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'pbgp123456@gmail.com';                     //SMTP username
        $mail->Password   = 'cerkaarewkaofidf';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setfrom('13ritesh1998@gmail.com', 'Mailer');
        $mail->addAddress($email, 'Hi User');     //Add a recipient
    
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Thanks for Subscription !';
        $mail->Body    = 'Thanks for Subscribing Fashion Club <a><b>www.fashion_club.com</b></a>';
        $mail->AltBody = 'Thanks for Subscribing Fashion Club <a><b>www.fashion_club.com</b></a>';
    
        $mail->send();
            echo "<script>alert('you have subscribed for email')</script>";
            echo "<script>window.location.href='index.php'</script>";
        } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


?>