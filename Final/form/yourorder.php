<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
</head>
<body>
    <h2>Thank you for your order:</h2>
    <?php 

if(isset($_POST['form_submitted'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    
    $order = $_POST['topping'];
    $extra = $_POST['extras'];


    echo"Customer ID: ".$uname."<br>";    
    echo"Email: ".$email."<br>";    
    echo"Your Order: ".$_POST['size'].' '.$order."<br>"; 
    

    echo"Extra Toppings: ".$extra."<br>";    
       
    
}


else{
    header("location:Order.php");
}
    ?>
    
</body>
</html>