<?php
// session_start();
include_once 'init.php';

session_destroy();

header('location:./sessions.php')

?>