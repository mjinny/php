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
        echo"<div id='logout'>
            <a href='logout.php'>logout</a>
        </div>";
        // echo "<a href='logout.php'>logout</a><br>"; 
    } ?>
    <br><br></div><hr>
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
    $search = $cat = $price = 0;
    if(isset($_GET['submit'])){
        $search = $_GET['search'];
        $cat = $_GET['cat'];
        $price = $_GET['price'];
        // echo empty($search);
        // echo $cat;
        // echo $price;
    }
    include("connection.php");
    if (!empty($search)) {
        $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%'";
        if ($cat != 'Not Selected') { //selected
            if ($price != 'Not Selected') { //selected
                if ($price == 'high') {
                    $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%' AND Category = '$cat' ORDER BY Price DESC";
                } else if ($price == 'low') {
                    $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%' AND Category = '$cat' ORDER BY Price ASC";

                }
            } else {
                $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%' AND Category = '$cat'";

            }

        } else if ($cat == 'Not Selected' && $price == 'high') {
            $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%' ORDER BY Price DESC";

        } else if ($cat == 'Not Selected' && $price == 'low') {
            $sql = "SELECT * FROM skincare WHERE ProductName LIKE '%$search%' ORDER BY Price ASC";
        }
    // } else if (empty($search)) {
    //     if ($cat == 'Not Selected' && $price == 'high') {
    //         $sql = "SELECT * FROM skincare ORDER BY Price DESC";
    //     } else if ($cat == 'Not Selected' && $price == 'low') {
    //         $sql = "SELECT * FROM skincare ORDER BY Price ASC";
    //     } else if ($cat != 'Not Selected' && $price == 'high') {
    //         $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price DESC";
    //     } else if ($cat == 'Not Selected' && $price == 'low') {
    //         $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price ASC";
    //     } else if ($cat != 'Not Selected' && $price == 'high') {
    //         $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price DESC";
    //     } else if ($cat != 'Not Selected' && $price == 'low') {
    //         $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price ASC";
    //     } else if ($cat == 'Not Selected' && $price == 'Not Selected') {
    //         $sql = "SELECT * FROM skincare";
    //     }
    // } else {
    //     $sql = "SELECT * FROM skincare WHERE Category = '$cat'";
    // }
        
    }else if(empty($search) && $cat =='Not Selected' && $price =='high'){
        $sql = "SELECT * FROM skincare ORDER BY Price DESC";

    }else if(empty($search) && $cat =='Not Selected' && $price =='low'){
        $sql = "SELECT * FROM skincare ORDER BY Price ASC";

    }else if(empty($search) && $cat !='Not Selected' && $price =='high'){
        $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price DESC";

    }else if(empty($search) && $cat =='Not Selected' && $price =='low'){
        $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price ASC";

    }elseif(empty($search) && $cat !='Not Selected' && $price =='high'){
        $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price DESC";

    }elseif(empty($search) && $cat !='Not Selected' && $price =='low'){
        $sql = "SELECT * FROM skincare WHERE Category = '$cat' ORDER BY Price ASC";

    }
    else if(empty($search) && $cat =='Not Selected' && $price =='Not Selected'){
        $sql = "SELECT * FROM skincare";
    }
    else{
            $sql = "SELECT * FROM skincare WHERE Category = '$cat'";
    }


    $qry = mysqli_query($com, $sql) or die(mysqli_error($com));
    $count = mysqli_num_rows(($qry));

    if($count>0){
        echo "<h2><br>" . $count . " Products" . "<br></h2><br>";
        echo "<table>";
        echo "<tr>
            <th>ID</th>  
            <th>Product Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Image</th>
        </tr>";
        while ($row = mysqli_fetch_array($qry)) {
            $id = $row['ID'];
            echo "<tr><td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['ProductName'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
            echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . '<img src="./images/' . $row['Imagefile'] . '" />' . "</td>";

        }
        echo "</table>"."<br>";
    }else{
        echo "<h1>" . "<br>No Data Available" . "</h1>";

    }
    ?>

</body>

</html>