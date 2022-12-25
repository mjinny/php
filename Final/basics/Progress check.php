<!DOCTYPE html>
<html>
<head><title>WAT Week 5 Progress Check</title></head>
<body>
<h1>WAT Week 5 Progress Check</h1><hr>
<h2>Generate Statements</h2>
<?php
//produce code that will display your name and ID on separate lines
echo'Name: Jenny'.'<br>'.'ID: 77297946'.'<br>';


echo'<br>'."\"It's not more than "."&pound;",'3"';

?>
<h2>Use Arithmetic Operators </h1>
<?php


$loan = 500;
    $interest = 3.5;
    $paid = ($loan/100)*$interest;
    echo "Loan: ".$loan;
    echo "<br>";
    echo "Rate: ".$interest."%<br>";
    echo "Payable: "."&pound;".number_format($paid,2);

?>
<h2>Use Conditional Statements</h2>
<?php
/*Declare variables to hold username and password, assign the values
 * "user01" and "pass".  Write code that will test the value
 * of your two variables and display the word "success" if
 * user is "user01" and password is "passwd", or "fail" if not.
 */
$username = 'user01';
$password = "pass";

if(strlen($password)<6){
    echo"Please use at lease 6 characters";
}
echo'<br>'.'<br>';
 
if($username =='user01' && $password =='pass'){
    echo"Success";
}
else{echo"Fail";}
?>
<hr>
<h2>Loops</h2>
<?php 
$color = array("Blue","Yellow","Red","Black");

// foreach($color as $values){
//     echo $color[0];
// }
$size = count($color);
$i = 0;
while($i<$size){
    echo $color[0];
    $i++;
}
?>




 <!-- //important functions in string
 /*addslashes
 stripslashes
 htmlentities
 ltrim
 rtrim
 md5
 sha1 */ -->

 <!-- //<a href="display.php?page=Home">Home</a>; -->

</body>
</html>
