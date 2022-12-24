<?php
$password = 'Iwbctkgopsmdl99.';
// $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
$pattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%.]{8,16}$/';
// $pattern = '/^[0-9]{4,10}$/';
if(!preg_match($pattern,$password)){
    echo "Password Not match";
}
else{
    echo "Valid Password";
}
?>