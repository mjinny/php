<?php
$url = "abc";
if(filter_var($url, FILTER_VALIDATE_DOMAIN)){
    echo"Valid";
}
else{
    echo"Not valid";
}
?>
<h2>Email validation</h2>
<?php
$email="JAke@gmail.com";
$smail = filter_var(($email. FILTER_SANITIZE_EMAIL));

if(filter_var($smail, FILTER_VALIDATE_EMAIL)){
    echo"Valid email";
}
else{
    echo"Not valid email";
}
?>
<h2>String validation</h2>
<?php
$str = "<h1>Hello World!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>
// $str="<b>fghjk</b>";
// $username = filter_var($str, FILTER_SANITIZE_STRING)

?>