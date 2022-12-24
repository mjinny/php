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
        $sql = "SELECT * FROM category";

        //making connection
        require("connection.php");
        //executing query
        $qry = mysqli_query($com,$sql) or die(mysqli_error($com));
        
    echo"<h1>List all Category</h1>"."<hr>"."<br>";

    $count = mysqli_num_rows($qry);
    if($count>=1){
        while($row=mysqli_fetch_array($qry)){
            echo"<img src=\"uploads/".$row['thumbimg']."\"alt=".$row['cname']."width ='200px'>";
        }
    }





    // echo"<table>";
    // echo"<tr>
    //         <th>ID</th>
    //         <th>Name</th>
    //         <th>Description</th>
    //         <th>Status</th>
    //     </tr>";


    // while($row=mysqli_fetch_array($qry)){
    //     echo"<tr><td>".$row['id']."</td>";
    //     echo"<td>".$row['cname']."</td>";
    //     echo"<td>".$row['description']."</td>";
    //     echo"<td>".$row['status']."</td>";

    // }

    ?>
</body>
</html>