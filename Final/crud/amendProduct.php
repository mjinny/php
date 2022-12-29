<?php 
// if(isset($_POST['submit'])){
    include_once("connection.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE ProductID=$id";

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
</head>
<body>
    <form method="POST" action="updateProduct.php">
        <fieldset>
            <legend>Enter Product Details</legend>
            <input type="hidden" name="hideProductID" value="<?php echo$row['ProductID']?>" />
            <label for="pname">Product Name:</label>
            <input type="text" name="pname" value="<?php echo$row['ProductName']?>"></br><br>

            <label for="price">Price:</label>
            <input type="text" name="price"value="<?php echo$row['ProductPrice']?>"></br><br>

            <label for="imgname">Image File Name:</label>
            <input type="text" name="imgname" value="<?php echo$row['ProductImageName']?>"></br><br>
        </fieldset>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="clear" value="Clear">

        
    </form>
</body>
</html>