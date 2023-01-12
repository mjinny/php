<?php 
define("USERNAME","root");
define("PASSWORD","");
define("HOST","localhost:3306");
define("DATABASE","studentd");


$com = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE) or die("unable to connect to the databse");

session_start();
?>