<?php
session_start();
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['workspace'] =  $row['workspace'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['address'] =  $row['address'];
        $_SESSION['city'] =  $row['city'];
        $_SESSION['state'] =  $row['state'];
        $_SESSION['pin'] =  $row['pin'];
        $_SESSION['country'] =  $row['country'];
        $_SESSION['mobile'] =  $row['mobile'];
        $_SESSION['password'] =  $row['password'];
        $_SESSION['cpassword'] =  $row['cpassword'];

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
        header('location:login.php');
    }
}
