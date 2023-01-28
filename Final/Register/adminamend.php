<?php 
// if(isset($_POST['submit'])){
    include_once("connection.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM skincare WHERE ID=$id";

    $qry = mysqli_query($com, $sql) or die(mysqli_error($com));

    $row = mysqli_fetch_assoc($qry);
    // print_r($row);
    // exit();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="amendstyle.css">

</head>
<body>
    <div id="main_box">
        <div id="cont">
        <form method="POST" action="updateproduct.php">
        <fieldset>
            <legend>Product Details</legend>
            <label>
                <input type="hidden" name="hideproductID" value="<?php echo$row['ID']?>" />
                    <span>Product ID</span>
                    <input type="text" name="productid" value="<?php echo$row['ID']?>"/>
                    
                    
                </label>
            <label>
                    <span>Product Name</span>
                    <input type="text" name="productname" value="<?php echo$row['ProductName']?>"/>
                    
                    
                    
                </label>
                <label>
                    <span>Price</span>
                    <input type="text" name="price" value="<?php echo$row['Price']?>" />
                    

                </label>
                <label>
                    <span>Category</span>
                    <input type="text" name="category" value="<?php echo$row['Category']?>" />
                    

                </label>
                <!-- <label>
                    <span>Image</span>
                    <input type="file" name="image"  />
                    

                </label> -->
                
                <label>
                <input type="submit" class ="btn" name="submit" value="change">
             
                </label>
        
    </form>
        </div>

    </div>
</body>
</html>