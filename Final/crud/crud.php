<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Manage Products</h2>
<form method="post" action="insertProduct.php" name="add" enctype="multipart/form-data">
        <fieldset>
            <legend>Enter New Product Details</legend>
            
            
            <label for="pname">Product Name:</label><br>
            <input type="text" name="pname"/><br/><br>
            
            <label for="price">Price:</label><br>
            <input type="text" name="price"/><br/></br>

            <label for="imgname">Image File Name:</label><br>
            <!-- <input type="file" name="imgname"/><br/></br> -->
            <input type="text" name="imgname"><br><br>
            <input type="submit" name="addc" value="Submit"/>
            <input type="reset" name="clear" value="Clear"/><br/>

        </fieldset>
    </form>

    <?php 
    include("displayProducts.php") ?>
</body>
</html>


