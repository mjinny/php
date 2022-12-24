<?php

if(isset($_POST["check"]))
// if($_SERVER('REQUEST_METHOD')=='POST')
{

    if(isset($_POST["Register"])){
        $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];
    $check = $_POST['check'];
    $photo = $_FILES['photo']['name'];

    
    echo"<h2>Your information</h2>";
    echo "Username:". $username."<br>";
    echo "Password:". $password."<br>";
    echo "DOB:". $dd. $mm .$year."<br>";
    echo "Gender: ". $gender."<br>";
    echo "Selected courses are: "."<br>";
    foreach($_POST["course"] as $course){
        echo$course."&nbsp";
    }
    echo "Message: ".$message."<br>";
    echo "Photo: ".$photo."<br>";
    echo "Confirm: ".$check."<br>";
    
    }
    
}
else{
    header("location:form.php");
}
?>