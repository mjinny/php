<?php 
//Set up the database access credentials
$hostname = 'stu-db.aet.leedsbeckett.ac.uk'; 
$username = '77297946'; //your standard uni id
$password = 'MyDB35411932'; // the password found on the W: drive
$databaseName = 'studentd'; //the name of the db you are using on phpMyAdmin
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or 
exit("Unable to connect to database!");
?>
