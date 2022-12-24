<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <?php
    //checking the form is submitted or not
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //getting the form field data
        $usr = $_POST['username'];
        $pwd = $_POST['password'];
        $rememberme = $_POST['rememberme'];

        if(!empty($rememberme)){
            setcookie("username", $usr, time() + 60 * 60 * 24, "/");
            setcookie("password",$_POST['password'] , time() + 60 * 60 * 24, "/");

        }




        if(!empty($usr) && !empty($pwd))
        {
             //sql to valid login
        $sql = "SELECT * FROM users WHERE username='$usr' AND password=md5('$pwd')
        and status=1 and isverified=1";
        //making connection to db 
        include("connection.php");
        //executing query
        $qry=mysqli_query($com, $sql) or die(mysqli_error($com));
        $count=mysqli_num_rows($qry);
        if($count==1)
        {
            // registering sessions
            $_SESSION['username']=$usr;
            $_SESSION['stime']=date("ymdhisu");
            header("location: admin/dashboard.php");
        }
        else
        {
            echo "Invalid Credentials";
        }
    }//empty
    
    else{
        echo "Pleae fill all fiedlds";
    }
    }

    ?>
    <form method="POST" action="" name="login" enctype="multipart/form-data">
        <fieldset>
            <legend>User input</legend>
            <label for="username">Username</label><br>
            <input type="text" name="username" value="<?php if (isset($_COOKIE['username']))
                echo $_COOKIE['username'];?>" placeholder="Username" /><br/><br>
            <label for="password">Password</label><br>

            <input type="password" name="password" value="<?php if (isset($_COOKIE['password']))
                echo $_COOKIE['password'];?>"placeholder="Password" /><br/><br>
            <input type="checkbox" name="rememberme" value="1"/> Remember Me<br/><br>

            <input type="submit" name="login" value="login"/ >
        </fieldset>
    </form>

    <p>Not  Registered Member. <a href="sqlll/register.php">Sign Up</a></p>
    
</body>
</html>
