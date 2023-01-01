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
<form method="post" action="" name="add" enctype="multipart/form-data">
        <fieldset>
            <legend>Enter New Product Details</legend>
            
            
            <label for="pname">Product Name:</label><br>
            <input type="text" name="pname"/><br/><br>
            
            <label for="price">Price:</label><br>
            <input type="text" name="price"/><br/></br>

            <label for="category">Category:</label><br>
            <input type="text" name="category"/><br/></br>

            <label for="imgname">Image File :</label><br>
            <input type="file" name="imgname"/><br/></br>
            <!-- <input type="text" name="imgname"><br><br> -->
            <input type="submit" name="addc" value="Submit"/>
            <input type="reset" name="clear" value="Clear"/><br/>

        </fieldset>
    </form>

   
</body>
</html>
<?php 
    if(isset($_POST['addc'])){
       
        $pname = $_POST['pname'];
        $price = $_POST['price'];
         $cat = $_POST['category'];
        // $imgname = $_POST['imgname'];
        $uimage = $_FILES['imgname']['name'];
        $usize = $_FILES['imgname']['size'];
        $utype = $_FILES['imgname']['type'];
        $utmpname = $_FILES['imgname']['tmp_name'];
        $ulocation = "images/".$uimage;

        


        //writing sql statement
        // $sql = "INSERT INTO products(ProductName, ProductPrice, ProductImageName) VALUES ('$pname','$price','$uimage')";
        $sql = "INSERT INTO skincare(ProductName,Price, Category,Imagefile) VALUES ('$pname','$price','$cat','$uimage')";

        //connecting to database
        require("connection.php");//include() include_once() require() require_once()

        //executing the query
        $qry = mysqli_query($com, $sql) or die(mysqli_error($com));
        if($qry){
            echo"Data inserted Successfully";

            if(move_uploaded_file($utmpname,$ulocation)){
                echo"Uploaded successfully";
            }
            else{
                echo"error";
            }
        }


    }
    ?>