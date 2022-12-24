<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test file</title>
    <style>
        .formm{
            display: flex;
            /* align-items: center; */

        }
    </style>

</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $pass = md5($_POST['password']);

        $sql = "INSERT INTO test (username, password) VALUES('$uname','$pass')";

        require("connection.php");

        $qry = mysqli_query($com, $sql) or die($com);
        if($qry){
            echo "DATA INSERTED";
        }
    }
    
    ?>
    <div class="formm">
    <form method="POST" action="" name="test">
        <fieldset>
            <legend>Test form</legend>
            <label for="username">Username: </label>
            <input type="text" name="username"/><br/><br>
            <label for="password">Password: </label>

            <input type="password" name="password"/><br/><br>
            <!-- Is Verified: <input type="checkbox" name="verified"><br><br> -->
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
    </div>
</body>

</html>