<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql</title>
</head>

<body>
    <form method="POST" action="insertRecord.php">
        <fieldset>
            <legend>Enter Customer Details</legend>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname"><br><br>

            <label for="surname">Surname:</label>
            <input type="text" name="surname"><br><br>

            <label for="email">Email:</label>
            <input type="text" name="email"><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password"><br><br>

            <label for="gender">Gender:</label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>

            </select><br><br>

            <label for="age">Age:</label>
            <input type="text" name="age"><br><br>

            <input type="submit" value="Submit" name="TaxSubmit" />

            <input type="reset" value="clear" />

        </fieldset>
    </form>
    <?php

    include 'selectRecord.php';

    ?>
</body>

</html>