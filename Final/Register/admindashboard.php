<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">

</head>

<body>
    <div class="header">
        <!-- <h1>dwdwdw</h1> -->
        <?php
        // session_start();
        if (isset($_SESSION['username'])) {
            echo "<h2>" . "WELCOME,  " . $_SESSION['username'] . "</h2>";
            echo "<div id='logout'>
            <a href='logout.php'>logout</a>
        </div>";
            // echo "<a href='logout.php'>logout</a><br>"; 
        } ?>
        <br><br>
    </div>
    <hr>
    <div class="box">
        <?php
        $sql = "SELECT * FROM register";

        //making connection
        require("connection.php");
        //executing query
        $qry = mysqli_query($com, $sql) or die(mysqli_error($com));

        echo "<h1>Users</h1>" . "<br>";
        

        echo "<table>";
        echo "<tr>
            <th>User ID</th>  
            <th>User Name</th>
            <th>Email</th>
            <th>Age Range</th>
            <th>Change</th>
        </tr>";
        while ($row = mysqli_fetch_array($qry)) {
            $id = $row['UserID'];
            echo "<tr><td>" . $row['UserID'] . "</td>";
            echo "<td>" . $row['Username'] . "</td>";

            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td><a href=amend.php?id=$id&action=edit>EDIT</a> | <a href=delete.php?id=$id&action=delete>DELETE</a></td>";
        }
        echo "</table>"."<br>";
        ?>
    <h1>Products</h1>
    <?php
        $sql = "SELECT * FROM skincare";

       
        $qry = mysqli_query($com, $sql) or die(mysqli_error($com));

        
        

        echo "<table>";
        echo "<tr>
            <th>ID</th>  
            <th>Product Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Imagefile</th>
            <th>Change</th>
        </tr>";
        while ($row = mysqli_fetch_array($qry)) {
            $id = $row['ID'];
            echo "<tr><td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['ProductName'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
            echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . '<img src="./images/' . $row['Imagefile'] . '" />' . "</td>";

            echo "<td><a href=adminamend.php?id=$id&action=edit>EDIT</a> | <a href=admindelete.php?id=$id&action=delete>DELETE</a></td>";
        }
        echo "</table>"."<br>";
        ?>
    </div>
        
</body>

</html>