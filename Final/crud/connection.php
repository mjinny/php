<?php 
define("USERNAME","root");
define("PASSWORD","");
define("HOST","localhost:3306");
define("DATABASE","studentd");


$com = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE) or die("unable to connect to the databse");


// $host = "localhost";
// $database_n = "studentd";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$database_n", $username, $password);
//     echo "Connected to $database_n at $host successfully.";
// } catch (PDOException $pe) {
//     die("Could not connect to the database $database_n :" . $pe->getMessage());
// }
?>