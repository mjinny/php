<?php 
if(mail("mjennie444@gmail.com","Test subject","test message body")){
    echo "mail sent";
}
else{
    echo"unable to send email";
} ?>