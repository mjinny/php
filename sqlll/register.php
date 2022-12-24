<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        //collecting the data
        $uname=$_POST['username'];
        $upass=md5($_POST['password']);
        $uemail=$_POST['email'];
        $isverified = $_POST['isverified'];
        //writing the sql statement
        $sql = "INSERT INTO users(username, password, email, isverified)VALUES('$uname', '$upass' , '$uemail','$isverified')";
        //making the connection
        require("connection.php");
        //executing the query
        $qry=mysqli_query($com, $sql) or die(mysqli_error($com));
        if($qry)
        {
            echo "Data inserted Successfully.";
        }
    }
    ?>
    <form method="post" action="" name="register">
        <fieldset>
            <legend>User Registration</legend>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Username"/>
            <br/><br>
            <label for="password">Password: </label>

            <input type="password" name="password" placeholder="Password" />
            <br/><br>
            <label for="email">Email: </label>

            <input type="email" name="email" placeholder="you@domain.com" />
            <br/><br>
            <label for="isverified">Is Verified: </label>

            <input type="checkbox" name="isverified"/><br><br>

            <input type="submit" name="submit" value="Register"/>
        </fieldset>
    </form>
    <div> Already Registered<a href="login.php">Login</a>
</div>  
</body>
</html>



<!-- //admin - manual insert
//drop down menu for user and admin in login page -->
<!-- $role = $_POST['role'];
if($count ==1){
    $_SESSION['username'] = $username;
    if($role == 'admin'){
        $_SESSION['adminrole']==$role;
        header("location:admin/admindashboard.php");

    }
    else{
        $_SESSION['userrole']=$role;
        header("location:searchdashboard.php");
    }
} -->


<!-- usersession.php -->

<!-- if(!isset($_SESSION['username'])) and !set($_SESSION['userrole']){
    header("location:login.php");
} -->