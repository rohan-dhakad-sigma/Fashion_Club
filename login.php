<?php

$username = $_POST['Email'];
$password = $_POST['Password'];

//Create Connection
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
die("Connection failed: " .$conn->connect_error);
}

$select_record = "SELECT * FROM users WHERE (UserEmail='$username' OR UserPhone='$username' AND UserPassword='$password') ";

$result = $conn->query($select_record);

if($result->num_rows == 1)
{
    echo "<br>";
    echo "<script>alert('Login successful')</script>";
}
else
{
    echo "<script>alert('Username & passwords are incorrect')</script>"; 
}

?>