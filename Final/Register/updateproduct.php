<?php
include_once("connection.php");

$hid = $_POST['hideproductID'];
$id = $_POST['productid'];
$name = $_POST['productname'];
$price = $_POST['price'];
$category = $_POST['category'];

$sql = "UPDATE skincare SET ProductName = '$name', ID = '$id', Price = '$price' , Category = '$category'  WHERE ID ='$hid' ";

mysqli_query($com, $sql);
header("location:admindashboard.php");
?>