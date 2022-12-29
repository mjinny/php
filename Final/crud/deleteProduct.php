<?php 

    //making connection
    include_once("connection.php");

    $delid = $_GET['id'];
    //sql statement for delete
    $sql = "DELETE FROM products WHERE ProductID='$delid'";
    //executing query
    $qry = mysqli_query($com, $sql) or die(mysqli_error($com));

    header("Location: {$_SERVER['HTTP_REFERER']}");

    // if (mysqli_affected_rows($com) > 0) {

        //If yes , return to calling page(stored in the server variables)
        
        
        // } else {
        
        // print error message
        
        // echo "Error in query: $query. " . mysqli_error($com);
        
        // exit ;
        
        // }
    

?>