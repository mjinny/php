<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if(isset($_POST['addc'])){
        // $id = $_POST['id'];
        $cname = $_POST['cname'];
        $description = $_POST['description'];
        //capturing the image name
        $uimage = $_FILES['image']['name'];
        $usize = $_FILES['image']['size'];
        $utype = $_FILES['image']['type'];
        $utmpname = $_FILES['image']['tmp_name'];
        $ulocation = "uploads/".$uimage;


        if(!empty($cname)){

        }
        else{
            echo"Fill category name";
        }


        //writing sql statement
        $sql = "INSERT INTO category(cname, description, thumbimg) VALUES ('$cname','$description','$uimage')";

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
<form method="post" action="" name="add" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Category</legend>
            
            
            <label for="id">Category Name</label><br>
            <input type="text" name="cname" placeholder="Category Name"/><br/><br>
            
            <label for="id">Description</label><br>
            <input type="text" name="description" placeholder="Description"/><br/></br>
            <label for="id">Upload an image</label><br>
            <input type="file" name="image"/><br/></br>
            <input type="submit" name="addc" value="add"/><br/>
        </fieldset>
    </form>
</body>
</html>

<?php
$sql = "SELECT * FROM category WHERE status =1";
include("connection.php");
$qry = mysqli_query($com, $sql) or die(mysqli_error($com));
$count = mysqli_num_rows(($qry));
if($count>=1){
    echo "<select size =1 name=<category-id>";
    while($row = mysqli_fetch_array($qry)){
        echo "<option value=" . $row['id'] . ">" . $row['cname'] . "</option>";
    }
    echo "</select>";
}

?>

<!-- //Add post(fieldset legend) -->

<!-- //category->drop down menu -->

<!-- //userid -->
<!-- title -->
<!-- description -->
<!-- image(browse) -->

<!-- add->button -->