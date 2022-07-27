<?php

//Create Connection
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
die("Connection failed: " .$conn->connect_error);
}

if(isset($_POST['query']))
{
    $output = "";
    $query = "SELECT * FROM products WHERE ProductName LIKE '%".$_POST['query']."%' ";
    $result = $conn->query($query); 
    $output = '<ul class="list-unstyled">';

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $output .= '<li>'.$row['ProductName'].'</li>';
        }
    }
    else
    {
        $output .= '<li>Product Not Found</li>';
    }
    $output .= '</ul>';
    echo $output; 
}
?>