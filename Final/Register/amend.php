<?php 
// if(isset($_POST['submit'])){
    include_once("connection.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM register WHERE UserID=$id";

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
        <form method="POST" action="updateuser.php">
        <fieldset>
            <legend>User Details</legend>
            <label>
                <input type="hidden" name="hideUserID" value="<?php echo$row['UserID']?>" />
                    <span>UserID</span>
                    <input type="text" name="userid" value="<?php echo$row['UserID']?>"/>
                    
                    
                </label>
            <label>
                    <span>Username</span>
                    <input type="text" name="username" value="<?php echo$row['Username']?>"/>
                    
                    
                    
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="<?php echo$row['Email']?>" />
                    

                </label>
                <!-- <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                  

                </label> -->
                <!-- <label>
                    <span id="age">Age Range&emsp;</span>
                    <select name="range" id="agerange" >
                        <option class="options" value="Not Selected">Age Range</option>
                        <option class="options" value="Teens">Teens</option>
                        <option class="options" value="Twenties">Twenties</option>
                        <option class="options" value="Thirties">Thirties</option>
                        <option class="options" value="Forties">Forties</option>
                        <option class="options" value="Above Fifties">Above Fifties</option>

                    </select><br>
                
                    
                </label> -->
                <!-- <label>
                <input type="checkbox" name="terms" id="terms">
                <span id="term_span">I agree to the terms and conditions</span>
                

                </label> -->
                <label>
                <input type="submit" class ="btn" name="submit" value="Register">
             
                </label>
        
    </form>
        </div>

    </div>
</body>
</html>