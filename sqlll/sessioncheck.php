<?php
session_start();
if(!isset($_SESSION['username']) AND !isset($_SESSION['stime'])){
    header("location:../login.php");
}
?>