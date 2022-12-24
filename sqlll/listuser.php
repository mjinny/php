<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
        border: 1px solid;
        border-collapse: collapse;
        }  

        table{
        width: 90%;
        text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    //writing sql query
    //$sql = "SELECT * FROM studentd WHERE isVerified = 1";
    $sql = "SELECT * FROM users";

    //making connection
    require("connection.php");
    //executing query
    $qry = mysqli_query($com,$sql) or die(mysqli_error($com));
    //counting the records
    $count = mysqli_num_rows($qry);
    //printing the record 
    // echo"<h3>We have $count records</h3>"; 
    // while($row=mysqli_fetch_array($qry)){
    //     echo $row['id']."<br>" ;
    //     echo $row['username']."<br>";
    //     echo $row['password']."<br>";
    //     echo $row['email']."<br>";
    //     echo $row['role']."<br>";
    //     echo $row['isverified']."<br>";
    //     echo $row['status']."<br>";
    //     echo "<br>";
    // }
    echo"<table>";
    echo"<tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            <th>Is Verified</th>
            <th>Status</th>
            <th>Action</th>
        </tr>"; 
    while($row=mysqli_fetch_array($qry)){
        $id = $row['id'];
        echo "<tr><td>".$row['id']."</td>" ;
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['role']."</td>";
        echo "<td>".$row['isverified']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td><a href=edit.php?id=$id&action=edit>EDIT</a> | <a href=delete.php?id=$id&action=delete>DELETE</a></td>";

        // echo "<td>".$row['Created at']."</td>";
        // echo "<td>".$row['Updated at']."</td>";
        // echo "</tr>";
    }

    
    ?>

<!-- //$sql = "SELECT * FROM customer WHERE Gender ='M' ORDER BY Age DESC";    
//$sql = "SELECT * FROM customer WHERE firestname LIKE '%a%'";

// LIKE '%a%' ->contains a 
// LIKE 'a%' -> last 
// LIKE '%a' ->last -->
     
</body>
</html>