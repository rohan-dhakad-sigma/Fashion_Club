<?php

session_start();

if(isset($_SESSION['userfname']))
{ 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$usercity = $_POST['usercity'];
$userstate = $_POST['userstate'];
$userzip = $_POST['userzip'];
$usercountry = $_POST['usercountry'];
$userid = $_POST['userid'];

// Making connection to the database
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "</br> </br>";

$sql="UPDATE users SET UserEmail='$email',UserFirstName='$firstname',
UserLastName='$lastname',UserCity='$usercity',UserState='$userstate',
UserZip='$userzip',UserPhone='$phone',UserCountry='$usercountry',
UserAddress='$address1',UserAddress2='$address2' WHERE UserId = '$userid' ";

$conn->query($sql);
$temp = $_SESSION['useremail'];

$select_record = "SELECT * FROM users WHERE UserEmail='$temp' ";
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


// Condition to check if record inserted successfully or not.
if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "<script>alert('Information_Updated_Successfully')</script>";
    echo "<script>window.location.href='account.php'</script>";
}
else
{
    echo '<br>';
    echo "Error in updating post: " .$conn->error;
}

}

?>