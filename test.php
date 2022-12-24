<?php 
include('connection.php');
if(isset($_POST['submit']))
    {
        $fname = $_POST['firstname'];
        $sname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
    }

    
$query = "INSERT INTO customer(fname, lname, email, password, gender, age)
VALUES ('$fname', '$sname', '$email','$password','$gender','$age')";     
if(mysqli_query($conn, $query))
    {
        echo "Record inserted successfully.";
    } 

else
    {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }



?>