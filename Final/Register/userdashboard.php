<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="udstyle.css">
</head>

<body>
    <div class="header">
        <!-- <h1>dwdwdw</h1> -->
        <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "<h2>"."WELCOME,  " . $_SESSION['username'] ."</h2>";   
    } ?>
    </div><hr>
    <div class="box">
        <form method="GET">
        <label>
            <input id="search" type="search" name="search"placeholder="Search" autofocus  />
        </label>
        <input type="submit" name="submit" value="GO" id="submit">
        <br><br>
        <label>
            <span id="cate">Category</span>
            <select name="cat" id="category">
                <option class="options" value="Not Selected">Select Category</option>
                <option class="options" value="Cleanser">Cleanser</option>
                <option class="options" value="Toner">Toner</option>
                <option class="options" value="MOisturizer">Moisturizer</option>
                <option class="options" value="Exfoliator">Exfoliator</option>
                <option class="options" value="Sunscreen">Sunscreen</option>
            </select>
        </label><br><br>
        <label>
            Price Range:
            <select name="price" id="category">
                <option class="options" value="Not Selected">Select Category</option>
                <option class="options" value="high">Highest to Lowest</option>
                <option class="options" value="low">Lowest to Highest</option>
                
            </select>
        </label>
        
        </form>
    </div><hr>
    <?php 
    if(isset($_GET['submit'])){
        $search = $_GET['search'];
        $cat = $_GET['cat'];
        $price = $_GET['price'];
        // echo $price;
    }
    include("connection.php");
    if(!empty($search)){
        if(!empty($cat)){
            if(!empty($price =='high')){
                $sql = "SELECT FROM skincare ORDER BY Price DESC";
            }else{
                $sql = "SELECT FROM skincare ORDER BY Price ASC";

            }
        }
        $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%'";
    }else{
        $sql = "SELECT * FROM skincare";

    }
    $qry = mysqli_query($com, $sql) or die(mysqli_error($com));
    $count = mysqli_num_rows(($qry));
    if($count>0){
        while($row = mysqli_fetch_array(($qry))){
            
        }
    }
    ?>

</body>

</html>