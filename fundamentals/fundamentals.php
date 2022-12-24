<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Paul Doney C123457</h1>
         <hr> 
      </header>
      
      <section id="container">
         <h1>Fundamentals of PHP</h1>
         <?php
         echo"<h2>Selections</h2>";
         $day = date('l'); 
		echo 'It\'s '.$day.'<br>';      

        if($day=='Wednesday'){
            echo'<br>'."It's midweek".'<br>';
        }
        else{
            echo'<br>'."It's normal college day".'<br>';
        }

        $hour = date('H');
        $minute =date('i');
        // date_default_timezone_set("Australia/Perth");
        date_default_timezone_set("Asia/Kathmandu");
        echo'<br>'."Current Time: " .date("H:i:s");
        if($hour < 12){
            echo'<br>'.'Good Morning'.'<br>';
        }
        else if($hour>18){
            echo'<br>'.'Good Night'.'<br>';
        }
        else{
            echo'<br>'.'Good Afternoon'.'<br>';
        }
		?>

        <h2>Ticket</h2>
        <?php
        $price = 25;
        $age = 15;
        $membership  = 'true';
        $discount = 0;

        if($age <12){
            $discount = 0.5;
        }
        else if($age >65){
            $discount = 0.25;
        }
        else if($age <18){
            $discount = 0.25;
        }
        if($membership == 'true'){
            $membership = 'Yes';
            $discount+=0.1;
        }

        echo"Initial Ticket Price: ".$price.'<br>';
        echo"Age: ".$age.'<br>';;
        echo"Member: ".$membership.'<br>';;
        echo"Final Ticket Price: ".$price*$discount;

        ?>

        <h2>Arrays</h2>
        <h3>Simple Arrays</h3>
        <?php

        $product = array("T-shirt","cap","mug");

        print_r($product)."<br>";

        $product[1] = "shirt";
        
        // foreach($product as $p){
        //     echo $p;
        // }
        ?>
      </section>
      <footer>   <br><hr><br>
         <small> <a href="../watIndex.html">Home</a></small>
      </footer>
   </body>
</html>
