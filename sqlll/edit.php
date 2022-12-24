<?php
if (isset($_POST['edituser'])) {
    // $id = $_POST['id'];
    $uid = $_POST['uid'];
    $user = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $isverifired = $_POST['isverified'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    if(!empty($password)){
        $sql = "UPDATE users set username='$user',password =md5('$password'),email='$email',isverified = '$isverifired',role = '$role',status = '$status' WHERE id = $uid";
    }
    else{
        $sql = "UPDATE users set username='$user',email='$email',isverified = '$isverifired',role = '$role',status = '$status' WHERE id = $uid";
    }

    include("connection.php");
    $qry = mysqli_query($com,$sql) or die(mysqli_error($com));


    if($qry){
    header("location:listusers.php");
}
    
}    

//checking id and action is set or not
if(isset($_GET['id'])&&isset($_GET['action']))
{
    $editid=$_GET['id'];
    $sql = "SELECT * from users where id=$editid";
    include("connection.php");
    $qry=mysqli_query($com, $sql) or die(mysqli_error($com));
    while($row=mysqli_fetch_assoc($qry))
    {
        $eid=$row['id'];
        $eusername=$row['username'];
        $eemail=$row['email'];
        $erole=$row['role'];
        $eisverified=$row['isverified'];
        $estatus=$row['status'];
    }
    //creating edit form
    echo "<form method=post action=''>";
    
    echo "<fieldset><legend>Edit $eusername</legend>";
    echo "<label>Username</label>"."<br>";
    echo "<input type='text' name='username' value='$eusername'>"."<br>";
    echo "<br/>";
    echo "<label>Password</label>"."<br>";
    echo "<input type='password' name='password'>"."<br>";
    echo "<br/>";
    echo "<label>Email</label>"."<br>";
    echo "<input type='email' name='email' value='$eemail'>"."<br>";
    echo "<br/>";
    echo "<label>Role</label>"."<br>";
    echo "<input type='text' name='role' value='$erole'>"."<br>";
    echo "<br/>";
    echo "<label>isVerified</label>"."<br>";
    echo "<input type='text' name='isverified' value='$eisverified'>"."<br>";
    echo "<br/>";
    echo "<label>Status</label>"."<br>";
    echo "<input type='text' name='status' value='$estatus'>"."<br>";
    echo "<br/>";
    echo "<input type ='hidden' name ='uid' value='$eid'>";
    echo "<input type='submit' name='edituser' value='Update...'>";
    
    echo "</fieldset>";
    echo "</form>";
}
else
{
    header("location:listusers.php");
}
?>