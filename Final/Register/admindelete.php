<?php 

    //making connection
    include_once("connection.php");

    $delid = $_GET['id'];
    //sql statement for delete
    $sql = "DELETE FROM skincare WHERE ID='$delid'";
    //executing query
    $qry = mysqli_query($com, $sql) or die(mysqli_error($com));

    header("Location: {$_SERVER['HTTP_REFERER']}");

    

?>