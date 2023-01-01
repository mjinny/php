<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="rstyles.css">

</head>
<body>
<?php
    $unameErr = $emailErr = $passErr = $ageErr = $termsErr = "";
    $uname = $email = $pass = $age = $terms = "";

if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if(empty($_POST['range'])){
        echo "<script>alert('Fill all the fields');</script>";
    }else{
        $age = $_POST['range'];
    }
    if(empty($_POST['terms'])){
        echo "<script>alert('Fill all the fields');</script>";
    }else{
        $terms = $_POST['terms'];
    }
 
    if(empty($uname||$email||$pass)){
        echo "<script>alert('Fill all the fields');</script>";
    }else{
        if (!preg_match("/^[a-zA-Z0-9]{6,12}+$/", $uname)) {
            $unameErr = "Enter Valid Username";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email address incorrect";
        } else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%.]{8,16}$/', $pass)) {
            $passErr = "Password Invalid";
        } else if (empty($_POST['range'])) {
            $ageErr = "Please select age range";
        } else if (empty($_POST['terms'])) {
            $termsErr = "Please agree to terms";
        }
        
        
        else{
            $age = $_POST['range'];
            $terms = $_POST['terms'];
            $pass = md5($_POST['password']);
            $sql = "INSERT INTO register(Username, Password, Email, Age)VALUES('$uname', '$pass' , '$email','$age')";
                require("connection.php");
            $qry=mysqli_query($com, $sql) or die(mysqli_error($com));
            if($qry)
            {
                echo "<p class='show'>Registration Successful</p>";
            }
            include("login.php");
        }
    }

}

?>
    <p class="top"></p>
    <div class="container">
        <div class="leftside">
            <h2>Create an Account</h2>
            <!-- <p><span class="error">* required field</span></p> -->
            <form method="POST">
                <label>
                    <span>Username</span>
                    <input type="text" name="username" />
                    <span class="error"><?php echo $unameErr; ?>
                    
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                    <span class="error"><?php echo $emailErr; ?>

                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                    <span class="error"><?php echo $passErr; ?>

                </label>
                <label>
                    <span id="age">Age Range&emsp;</span>
                    <select name="range" id="agerange">
                        <option class="options" value="Not Selected">Age Range</option>
                        <option class="options" value="Teens">Teens</option>
                        <option class="options" value="Twenties">Twenties</option>
                        <option class="options" value="Thirties">Thirties</option>
                        <option class="options" value="Forties">Forties</option>
                        <option class="options" value="Above Fifties">Above Fifties</option>

                    </select><br>
                    <span class="error"><?php echo $ageErr; ?>
                    
                </label>
                <label>
                <input type="checkbox" name="terms" id="terms">
                <span id="term_span">I agree to the terms and conditions</span>
                <span class="error"><?php echo $termsErr; ?>

                </label>
                <label>
                <input type="submit" class ="btn" name="submit" value="Register">
                <!-- <button type="button" class="submit" name="submit">Register</button> -->
                </label>
            </form>
        </div>
        <div class="rightside">
        <div class="img">
                <div class="img_text">
                <h2>One of Us?</h2><br>
                    <p>If you already has an account,<br> Just sign in!</p>
                </div>
                
                <div class="img__btn">
                    <a href="login.php">
                <input type="submit" class ="btn" name="submit" value="Login">

                        <!-- <button type="button" class="submit" name="login">Log in</button> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>