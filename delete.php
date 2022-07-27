<?php

session_start();

if(isset($_SESSION['userfname']))
{ 
// Making connection to the database
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "</br> </br>";
$userid = $_SESSION['user_id'];

$sql = "UPDATE users SET UserAddress=null, UserAddress2=null, UserCity=null, 
UserState=null, UserZip=null, UserCountry=null WHERE UserId='$userid'";

$conn->query($sql);

$select_record = "SELECT * FROM users WHERE UserId='$userid' ";
$result = $conn->query($select_record);
// print_r($result);

// Updating session variables again for showing the result of updation of address & personal Info
if($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    $_SESSION['userfname']=$row['UserFirstName'];
    $_SESSION['userlname']=$row['UserLastName'];
    $_SESSION['user_id']=$row['UserID'];
    $_SESSION['userphone']=$row['UserPhone'];
    $_SESSION['user_address1']=$row['UserAddress'];
    $_SESSION['user_address2']=$row['UserAddress2'];
    $_SESSION['usercity']=$row['UserCity'];
    $_SESSION['userstate']=$row['UserState'];
    $_SESSION['userzip']=$row['UserZip'];
    $_SESSION['useremail']=$row['UserEmail'];
    $_SESSION['usercountry']=$row['UserCountry'];
    $_SESSION['userpassword']=$row['UserPassword'];
}

// Condition to check if address deleted successfully or not.
if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "<script>alert('Address Deleted Successfully')</script>";
    echo "<script>window.location.href='account.php'</script>";
}
else
{
    echo '<br>';
    echo "Error in Deleting address: " .$conn->error;
}
}