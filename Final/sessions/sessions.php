<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Login</h3>

    <?php

    //include init.php so session vars can be used
    include_once("init.php");

    //Use an if statement to determine whether the session var holding //the user name ($_SESSION['user'] has been set. If it has, echo out //a welcome message for the user, followed by a links to a pages //called protected.php and logout.php.
    if (isset($_SESSION['user'])) {
        echo "WELCOME " . $_SESSION['user'] . "<br><br>";
        echo "<a href='logout.php'>logout</a><br>";
        echo "<a href='protected.php'>see protected page</a><br>";
    }
    //add an else section that will include loginform.php and display any //error message that is held in ($_SESSION['error']
    else {
        include 'loginform.php';
        if(isset($_SESSION['error'])){
            
            echo"<br>".$_SESSION['error'];
        }

    }
    ?>


</body>

</html>