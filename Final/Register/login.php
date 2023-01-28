<?php
 session_start();
 include("connection.php");
 ?>
 <?php
    $error = "";
   

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];

        $sql = "SELECT * FROM register WHERE Username = '$username' AND Password = '$password' AND Role = '$role'";

        $result = mysqli_query($com, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $username;
            if ($role == 'Admin') {
                $_SESSION['role'] = $row['role'];
                header("location:admindashboard.php");
            } else {
                $_SESSION['role'] = $row['role'];
                header("location:userdashboard.php");
            }
        } else {
            $_SESSION['error'] = "Invalid Credentials";
            header("location:login.php");
        }
    }
    ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="loginstyles.css">

</head>

<body>
    <p class="top"></p>
    <div class="container">
        <div class="rightside">
            <div class="img">
                <div class="img_text">
                    <h2>New here?</h2><br>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>

                <div class="img__btn">
                    <a href="register.php">
                        <!-- <button type="button" class="submitr" name="regist">Register</button> -->
                        <input type="submit" class="btn" name="submitr" value="Register">

                    </a>



                </div>
            </div>
        </div>
        <div class="leftside">
            <div class="formm">
                <h2>Sign In</h2>
                <form method="POST" >

                    <label>
                        <span>Username</span>
                        <input type="text" name="username" />
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" />
                        <span class="error">

                    </label>
                    <label>
                        <span id="age">Role&emsp;</span>
                        <select name="role" id="agerange">
                            <option class="options" value="Not Selected">Select Role</option>
                            <option class="options" value="User">User</option>
                            <option class="options" value="Admin">Admin</option>

                        </select><br>

                    </label>
                    <label>
                        <!-- <button type="button" class="submit" name="submit">Log in</button> -->
                        <input type="submit" class="btn" name="submit" value="Login">
                    </label>

                </form>
            </div>
        </div>

    </div>
    
</body>

</html>