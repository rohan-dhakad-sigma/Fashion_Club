<?php 

$search = $_GET['Search'];

//Create Connection
$conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
if ($conn->connect_error)
{
die("Connection failed: " .$conn->connect_error);
}
$limit = 5;

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM products WHERE ProductName LIKE '%$search%' OR ProductShortDesc LIKE '%$search%' limit $offset,$limit";
$result = $conn->query($sql);

// $total = $result->num_rows;
// echo "<br><br>"."$total";

if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        { ?>

        <div class="productDesc">
            <h1> <?php echo $row['ProductName']."<br>";?> </h1>
            <div class="image">
            <a href='single.php'> <img title=" " alt=" " src="data:image/jpg;charset=utf8;base64,
                <?php echo base64_encode($row['ProductImage']); ?> "> </a>
            </div>
            <h2>Price: $ <?php echo $row['ProductPrice']."<br><br>";?> </h2>
            <p> <?php echo $row['ProductShortDesc']; ?></p>
        </div>

        <style>
            .productDesc {
                float:left;
                margin:20px;
                width: 30%;
                height:657px;
                background-color:lightblue;
            }

            .productDesc h1,h2,p {
                padding:5px;
            }

            .image {
                padding-left:10px;
            }
        </style>
                 
        <?php
        }
    }
    else {
        echo "num rows is not accessible";
    }
?>


<?php
$sql1="SELECT * FROM products WHERE ProductName LIKE '%$search%' OR ProductShortDesc LIKE '%$search%'";
$result1=$conn->query($sql1);
if(!$result1){
    $msg="try again";
}
$total = $result1->num_rows;
echo "<br><br>".$total;
$pages = ceil ($total / $limit);
if($total>$limit){

    ?>
    <div class="pagination_box">
    <ul class="pagination pt-2 pd-5">
        <?php
        for($i=1;$i<=$pages;$i++){ ?>
            <li class="page-item <?= ($i==$page)?$active='active':'';?>">
                <a href="search.php?Search=<?=$search?>&page=<?=$i?>" class="page-link">
                    <?= $i ?>
                </a>
            </li>
        <?php } ?>
    </ul>
    </div>
<?php } ?>

<style>
    .pagination_box {
        margin-top:800px;
    }

    .page-item {
        float:left;
        margin-left:20px;
        list-style:none;
        background-color:#ecbd34;
        width: 40px;
        padding-bottom:20px;

    }
</style>















