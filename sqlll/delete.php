<?php 
//checking id and action is set or not
if(isset($_GET['id'])&&isset($_GET['action'])){
    $delid = $_GET['id'];
    //sql statement for delete
    $sql = "DELETE FROM users WHERE id=$delid";
    //making connection
    include_once("connection.php");
    //executing query
    $qry = mysqli_query($com, $sql) or die(mysqli_error($com));
    if($qry){
        header("location:listuser.php");
    }
}
else{
    header("location:listuser.php");

}
?>