<?php

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
          echo "<script>location.href='login.html'</script>";
     }
     else
     {
          echo "Email is used uniquely";
          $sql = "INSERT INTO users(`UserEmail`,`UserPassword`,`UserFirstName`,
          `UserLastName`,`UserCity`,`UserState`,`UserZip`,`UserPhone`,
          `UserCountry`,`UserAddress`,`UserAddress2`) 
          VALUES ('$email','$password','$fname','$lname','$city','$state','$zip_code',
          '$phone','$country','$address1','$address2')";
     
          // Condition to check if record inserted successfully or not.
          if($conn->query($sql) === TRUE)
          {
               echo '<br>';
               echo "<script>alert('Registration successfull')</script>";
               echo "<script>location.href='login.html'</script>";
          }
          else
          {
               echo '<br>';
               echo "Error in inserting record: " .$conn->error;
          }
     }

}

?>