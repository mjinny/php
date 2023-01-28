<?php 
    if(isset($_POST['addc'])){
       
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $imgname = $_POST['imgname'];
        // $uimage = $_FILES['imgname']['name'];
        // $usize = $_FILES['imgname']['size'];
        // $utype = $_FILES['imgname']['type'];
        // $utmpname = $_FILES['imgname']['tmp_name'];
        // $ulocation = "images/".$uimage;

        


        //writing sql statement
        // $sql = "INSERT INTO products(ProductName, ProductPrice, ProductImageName) VALUES ('$pname','$price','$uimage')";
        $sql = "INSERT INTO products(ProductName, ProductPrice, ProductImageName) VALUES ('$pname','$price','$imgname')";

        //connecting to database
        require("connection.php");//include() include_once() require() require_once()

        //executing the query
        $qry = mysqli_query($com, $sql) or die(mysqli_error($com));
        if($qry){
        header("location:{$_SERVER['HTTP_REFERER']}");
        // header("location:crud.php");
        echo "Data inserted";
        }



    }
    ?>