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

print($fname. " ". $lname." ".$uname." ".$email." ".$address1." "
     .$address2." ".$city." ".$state." ".$zip_code." ".$country." ".$phone." "
     .$password." ".$confirm);

?>