<?php

require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$file = addslashes(file_get_contents($_FILES['idDocument']['tmp_name']));

// $file = addslashes(file_get_contents($_FILES['document']['tmp_name']));

// print($fname. " ". $lname." ".$uname." ".$email." ".$address1." "
//      .$address2." ".$city." ".$state." ".$zip_code." ".$country." ".$phone." "
//      .$password." ".$confirm);

// checking password & confirm password are same or not
if($password != $confirm)
{
     echo "<script>alert('password & confirm passwrod are different')</script>";
     echo "<script>location.href='register.html'</script>";
}

else
{
     //Create Connection
     $conn = new mysqli("localhost","admin","admin","Fashion_Club");

     // Check Connection
     if ($conn->connect_error)
     {
     die("Connection failed: " .$conn->connect_error);
     }

     // Checking Duplicate Emails
     $select_record = "SELECT * FROM users WHERE UserEmail='$email' ";

     $result = $conn->query($select_record);
     
     if($result->num_rows == 1)
     {
          echo "<br>";
          echo "<script>alert('Email already exists')</script>";
          echo "<script>location.href='register.html'</script>";
     }
     else
     {
          echo "Email is used uniquely";
          $sql = "INSERT INTO users(`UserEmail`,`UserPassword`,`UserFirstName`,
          `UserLastName`,`UserCity`,`UserState`,`UserZip`,`UserPhone`,
          `UserCountry`,`UserAddress`,`UserAddress2`,`UserImage`) 
          VALUES ('$email','$password','$fname','$lname','$city','$state','$zip_code',
          '$phone','$country','$address1','$address2','$file')";

          // Email(success) function is called here. 
          success($email,$fname);

          // Condition to check if record inserted successfully or not.
          if($conn->query($sql) === TRUE)
          {
               echo '<br>';
               echo "<script>alert('Registration successful')</script>";
               echo "<script>location.href='login.html'</script>";
          }
          else
          {
               echo '<br>';
               echo "Error in inserting record: " .$conn->error;
          }
     }

}

function success($email,$fname){

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
         $mail->addAddress($email, $fname);     //Add a recipient
     
     
     
         //Content
         $mail->isHTML(true);                                  //Set email format to HTML
         $mail->Subject = 'Thanks for registration !';
         $mail->Body    = 'Thanks for registration on <a><b>www.fashion_club.com</b></a>';
         $mail->AltBody = 'Thanks for registration on <a><b>www.fashion_club.com</b></a>';
     
         $mail->send();
             echo 'Message has been sent';
         } 
         catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }
     }

?>