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
        width: 70%;
        text-align: center;
        }
        hr{
            border: 1px solid;
            
        }
    </style>
</head>
<body>
    <?php 
        $sql = "SELECT * FROM register";

        //making connection
        require("connection.php");
        //executing query
        $qry = mysqli_query($com,$sql) or die(mysqli_error($com));
        
    echo"<h1>Users</h1>"."<hr>"."<br>";

    echo"<table>";
    echo"<tr>
            <th>User ID</th>  
            <th>User Name</th>
            <th>Email</th>
            <th>Age Range</th>
            <th>Change</th>
        </tr>"; 
    while($row=mysqli_fetch_array($qry)){
        $id = $row['UserID'];
        echo "<tr><td>".$row['UserID']."</td>" ;
        echo "<td>".$row['Username']."</td>";
        
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Age']."</td>";
        echo "<td><a href=edit.php?id=$id&action=edit>EDIT</a> | <a href=delete.php?id=$id&action=delete>DELETE</a></td>";
        
    
    }
    echo "</table>";
    ?>

</body>
</html>