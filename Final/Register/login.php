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
    <?php
    $error = "";
    include("connection.php");
    session_start();

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($com, $_POST['username']);
        $password = mysqli_real_escape_string($com, $_POST['password']);

        $sql = "SELECT * FROM register WHERE Username = '$username' AND Password = '$password";

        $result = mysqli_query($com, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);

        if($count==1){
            // session_register("myusername");
            $_SESSION['login_user'] = $username;
            header("location:search.php");
        }else{
            $error = "Invalid credentials";
        }
    }
    ?>
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
                    <input type="submit" class ="btn" name="submitr" value="Register">

                    </a>
                    
                   
                    
                </div>
            </div>
        </div>
        <div class="leftside">
            <div class="formm">
            <h2>Sign In</h2>
            <form method="POST" action="session.php">
                
                <label>
                    <span>Username</span>
                    <input type="text" name="username" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                    <span class="error"><?php echo $error; ?>

                </label>
                <label>
                    <span id="age">Role&emsp;</span>
                    <select name="range" id="agerange">
                        <option class="options" value="Not Selected">Select Role</option>
                        <option class="options" value="User">User</option>
                        <option class="options" value="Admin">Admin</option>

                    </select><br>
                    
                </label>
                <label>
                <!-- <button type="button" class="submit" name="submit">Log in</button> -->
                <input type="submit" class ="btn" name="submit" value="Login">
                </label>

            </form>
            </div>
        </div>
        
    </div>
</body>
</html>