<?php

$username = $_POST['Email'];
$password = $_POST['Password'];
// echo "$username"." "."$password";

//Create Connection
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
die("Connection failed: " .$conn->connect_error);
}

$select_record = "SELECT * FROM users WHERE (UserEmail='$username' OR UserPhone='$username') AND UserPassword='$password' ";

$result = $conn->query($select_record);
print_r($result);

if($result->num_rows == 1)
{
    session_start();
    echo "<br>";
    echo "<script>alert('Login successful')</script>";
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

    echo "<script>location.href='account.php'</script>";
}
else
{
    echo "<script>alert('Username & passwords are incorrect')</script>"; 
    echo "<script>location.href='login.html'</script>";
}

?>