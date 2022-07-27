<?php

session_start();

if(isset($_SESSION['userfname']))
{
    session_destroy();
    echo "<script>alert('Logged Out')</script>";
    echo "<script>location.href='login.html'</script>";
}
else
{
    echo "<script>location.href='login.html'</script>";
} 

?>