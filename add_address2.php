<?php

session_start();

if(isset($_SESSION['userfname']))
{
    $address3 = $_POST['address1'];
    $address4 = $_POST['address2'];
    $city = $_POST['usercity'];
    $state = $_POST['userstate'];
    $zip = $_POST['userzip'];
    $country = $_POST['usercountry'];
    echo "$address3"." "."$address4";

$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "</br> </br>";

$sql = "ALTER TABLE users ADD (UserAddress3 varchar(100) DEFAULT NULL, 
UserAddress4 varchar(50) DEFAULT NULL, UserCity1 varchar(90) DEFAULT NULL, 
UserState1 varchar(20) DEFAULT NULL, UserZip1 varchar(12) DEFAULT NULL, 
UserCountry1 varchar(20) DEFAULT NULL)";

if($conn->query($sql) === TRUE)
{
    echo '<br>';

    $sql1 = "INSERT into users (UserAddress3, UserAddress4, UserCity1, UserState1,
     UserZip1, UserCountry1) VALUES ('$address3','$address4','$city','$state','$zip'
     ,'$country')";   
     
     if($conn->query($sql1) === TRUE)
     {
          echo '<br>';
          echo "<script>alert('New Address successfully')</script>";
          echo "<script>location.href='account.php'</script>";
     }
     else
     {
          echo '<br>';
          echo "Error in adding address: " .$conn->error;
     }
}
else
{
    echo '<br>';
    echo "Error in Creating column: " .$conn->error;
}


}
?>