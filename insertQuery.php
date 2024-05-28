<?php
session_start();
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $qr = "INSERT INTO `users`(`name`,`mobile`,`email`,`password`) VALUES ('$name','$mobile','$email','$password')";
    $res = mysqli_query($conn,$qr);
    if($res == true){
        header("location:login.php");
        exit;
    }else{
        echo "data could not insert";
    }
    
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['password'] = $password;

}