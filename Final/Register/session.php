<?php
include("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);

$username = mysqli_real_escape_string($com, $username);
$password = mysqli_real_escape_string($com, $password);

$sql = "SELECT * FROM register WHERE Username = '$username' AND Password = '$password'";
$result = mysqli_query($com, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1){
    header("location:search.php");
}
?>