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
                                                    if (isset($_POST['eemail'])) {
                                                        echo $_POST['eemail'];
                                                    }
                                                    ?>" /><br /><br>

            <textarea rows="4" cols="50" name="txtarea"></textarea><br />

            <label for="confirm">Click to Confirm: </label>

            <input type="checkbox" name="check" value="agree"><br /><br>

            <input type="submit" value="Submit" name="submit" />

            <input type="reset" value="Clear" />

        </fieldset>

    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['check'])) {
            $confirm = 'Agreed<br>';
        } else {
            $confirm = 'Not Agreed<br>';
        }
        $email2 = $_POST['eemail'];
        $comment = $_POST['txtarea'];
        if (!empty($email2) && filter_var($email2, FILTER_VALIDATE_EMAIL)) {
            echo "<br>Email: " . $email2 . "<br>";
            echo "Comment: " . $comment . "<br>";
            echo "Confirm: " . $confirm;
        } else {
            echo "<br>Email should be correct and filled<br>";
        }
    }
    ?>
    <br>
    <hr>
    <h2>Tax calculator</h2>
    <form method="POST" action="form.php">
        <fieldset>
            <legend>Without TAX calculator</legend>
            <label for="price">After Tax Price: </label>
            <input type="text" name="price" value="<?php
                                                    if (isset($_POST['price'])) {
                                                        echo $_POST['price'];
                                                    } ?>">

            <label for="rate">Tax Rate: </label>
            <input type="text" name="rate" value="<?php
                                                    if (isset($_POST['rate'])) {
                                                        echo $_POST['rate'];
                                                    } ?>">

            <input type="submit" value="Submit" name="TaxSubmit" />

            <input type="reset" value="clear" />
        </fieldset>
    </form>
    <?php
    if (isset($_POST['TaxSubmit'])) {
        $price_after_tax = $_POST['price'];
        $tax_rate = $_POST['rate'];
        if (!empty($price_after_tax || $tax_rate)) {
            $pattern = '/^\d+(:?[.]\d{2})$/';
            if (!preg_match($pattern, $price_after_tax)) {
                $before_tax = (100 * $price_after_tax) / (100 + $tax_rate);
                echo "<h3>Price before tax = " . "&pound" . $before_tax . "</h3>";
            } else {
                echo "floating number required in price";
            }
        } else {
            echo "Fill up all the fields";
        }
    }
    ?>
    <br><br>
    <hr>
    <h1>Passing Data Appended to an URL</h1>

    <h2>Pick a category</h2>

    <a href="forms.php?cat=Films">Films</a>

    <a href=" forms.php">Books</a>

    <a href=" forms.php">Music</a>
</body>

</html>