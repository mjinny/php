<?php
define("USERNAME", "root");
define("PASSWORD", "");
define("HOST", "localhost");
define("DATABASE", "studentd");

$com = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die("unable to connect");
