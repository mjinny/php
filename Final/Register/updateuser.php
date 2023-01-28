<?php
include_once("connection.php");

$hid = $_POST['hideUserID'];
$id = $_POST['userid'];
$name = $_POST['username'];
$email = $_POST['email'];
$range = $_POST['range'];

$sql = "UPDATE register SET Username = '$name', UserID = '$id', Email = '$email'  WHERE UserID ='$hid' ";

mysqli_query($com, $sql);
header("location:admindashboard.php");
?>