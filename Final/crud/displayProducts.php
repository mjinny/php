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
        $sql = "SELECT * FROM products";

        //making connection
        require("connection.php");
        //executing query
        $qry = mysqli_query($com,$sql) or die(mysqli_error($com));
        
    echo"<h1>Manage Products</h1>"."<hr>"."<br>";

    // $count = mysqli_num_rows($qry);
    // if($count>=1){
    //     while($row=mysqli_fetch_array($qry)){
    //         echo"<img src=\"uploads/".$row['thumbimg']."\"alt=".$row['cname']."width ='200px'>";
    //     }
    // }

    echo"<table>";
    echo"<tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Amend</th>
            <th>Delete</th>
        </tr>"; 
    while($row=mysqli_fetch_array($qry)){
        $id = $row['ProductID'];
        echo "<tr><td>".$row['ProductName']."</td>" ;
        echo "<td>".$row['ProductPrice']."</td>";
        // echo"<img src=\"images/".$row['ProductImageName'].">";
        echo "<td>".'<img src="./images/' . $row['ProductImageName'] . '" />'."</td>";
        echo "<td><a href=amendProduct.php?id=$id&action=amend>EDIT</a></td>";
        echo "<td><a href=deleteProduct.php?id=$id&action=delete>DELETE</a></td>";
        // echo "<td>".'<a href=AmendProduct.php?id=$id'. $row['ProductID'].'>Amend</a>'."</td>";
        // echo "<td>".'<a href=deleteProduct.php?id=$id'. $row['ProductID'].'>Delete</a>'."</td>";

        // echo "<img src='./images/" . $row['ProductImageName'] . "' />";

        // echo "<td>".$row['ProductImageName']."</td>";
    //     echo "<td><a href=edit.php?id=$id&action=edit>EDIT</a> | <a href=delete.php?id=$id&action=delete>DELETE</a></td>";
    
    }
    echo "</table>";

    
    ?>

</body>
</html>