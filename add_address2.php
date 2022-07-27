<?php

session_start();

if(isset($_SESSION['userfname']))
{
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "</br> </br>";
}
?>