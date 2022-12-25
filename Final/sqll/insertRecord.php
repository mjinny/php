<?php

//Make connection to database

include 'connection.php';

//(a)Gather from $_POST[]all the data submitted and store in variables
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gender'];

//(b)Construct INSERT query using variables holding data gathered
$query = "INSERT INTO customer(FirstName,LastName,Email,Password,Gender,Age) VALUES ('$firstname','$surname','$email','$password','$gender','$age')";


//Temporarily echo $query for debugging purposes

// echo $query;
// exit();
//run $query
mysqli_query($com, $query);
?>