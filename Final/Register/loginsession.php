<?php
    $error = "";
    session_start();
    include("connection.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];

        $sql = "SELECT * FROM register WHERE Username = '$username' AND Password = '$password' AND Role = '$role'";

        $result = mysqli_query($com, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] = $username;
            if ($role == 'Admin') {
                $_SESSION['role'] = $row['role'];
                header("location:admindashboard.php");
            } else {
                $_SESSION['role'] = $row['role'];
                header("location:userdashboard.php");
            }
        } else {
            $_SESSION['error'] = "Invalid Credentials";
            header("location:login.php");
        }
    }
    ?>