<?php

//include init.php
include_once("init.php");

//Gather details submitted from the $_POST array and store in local vars
if(isset($_POST['subLogin'])){
    $username = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    //build query to SELECT records from the users table WHERE
    
    $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
    
    //the username AND password in the table are equal to those entered.
     
    //run query and store result
    $qry = mysqli_query($com, $sql);
    
    //check result and generate message with code below
    
    if ($row = mysqli_fetch_assoc($qry)) {
    
    // echo 'you are recognised';
    $_SESSION['user']=$username;
        // $_SESSION['message'] = 'Login Success';
    header ('location:sessions.php');
    
    } else {
    
    // echo 'not recognised';
    $_SESSION['error']= 'User not recognised';
    
    header ('location: sessions.php');
    
    }
}else{
    header("location:loginform.php");
}


?>