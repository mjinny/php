<?php 
if(mail("bhattadiwash17@gmail.com","Test subject","test message body")){
    echo "mail sent";
}
else{
    echo"unable to send email";
} ?>