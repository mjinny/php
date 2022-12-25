<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <h1>Processing Input from HTML Forms</h1>

    <h2>Login Form using GET</h2>

    <form method="GET" action="form.php">

        <fieldset>

            <legend>

                Login

            </legend>

            <label for="email">Email: </label>

            <input type="text" name="txtEmail" /><br /><br />

            <label for="passwd">Password: </label>

            <input type="password" name="txtPass" /><br /><br />

            <input type="submit" value="Submit" name="loginSubmit" />

            <input type="reset" value="Clear" />

        </fieldset>

    </form>
    <?php
    if (isset($_GET['loginSubmit'])) {
        $email = $_GET['txtEmail'];
        $password = $_GET['txtPass'];

        echo "<br>Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
    ?>
    
    <br>
    <hr>
    <h2>More Form Handling</h2>
    <form method="POST" action="form.php">

        <fieldset>

            <legend>Comments</legend>

            <label for="email">Email: </label>

            <input type="text" name="eemail" value="<?php
            if(isset($_POST['eemail'])){
                echo $_POST['eemail'];
            }
            ?>"  /><br /><br>

            <textarea rows="4" cols="50" name="txtarea"></textarea><br />

            <label for="confirm">Click to Confirm: </label>

            <input type="checkbox" name="check" value="agree"><br /><br>

            <input type="submit" value="Submit" name="submit" />

            <input type="reset" value="Clear" />

        </fieldset>

    </form>
    <?php
    if (isset($_POST['submit'])) {
        if(isset($_POST['check'])){
            $confirm = 'Agreed<br>';
        }else{
            $confirm = 'Not Agreed<br>';
        }
        $email2 = $_POST['eemail'];
        $comment = $_POST['txtarea'];
        if(!empty($email2) && filter_var($email2, FILTER_VALIDATE_EMAIL)){
            echo "<br>Email: " . $email2 . "<br>";
            echo "Comment: " . $comment . "<br>";
            echo "Confirm: ".$confirm;

        }else{
            echo "<br>Email should correct and filled";
        }
    
    }
    ?>
</body>

</html>