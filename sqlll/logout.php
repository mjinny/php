<?php
include("seccioncheck.php");
session_destroy();
header("location:../login.php");
?>