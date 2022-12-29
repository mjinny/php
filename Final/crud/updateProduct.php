<?php
include_once("connection.php");

$id = $_POST['hideProductID'];
$name = $_POST['pname'];
$price = $_POST['price'];
$image = $_POST['imgname'];

$sql = "UPDATE products SET ProductName = '$name', ProductPrice = '$price', ProductImageName = '$image' WHERE ProductID ='$id' ";

mysqli_query($com, $sql);
header("location:crud.php");
?>