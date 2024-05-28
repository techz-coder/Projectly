<?php
session_start();
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $workspace = $_POST["workspace"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $country = $_POST["country"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $terms = $_POST["terms"];
    $subscribe = $_POST["subscribe"];

    $qr = "INSERT INTO `new_user`(`name`,`workspace`,
    `email`,`address`,`city`,`state`,`pin`,`country`,`mobile`,`password`
    ,`cpassword`,`terms`,`subscribes`
    ) VALUES ('$name','$workspace','$email','$address','$city','$state','$pin','$country','$mobile','$password',
    '$cpassword','$terms','$subscribe')";
    // if ($password === $cpassword) {
        $res = mysqli_query($conn, $qr);
        if ($res == true) {
            header("location:index.php");
            exit;
        } else {
            echo "data could not insert";
            echo "<pre>";
            print_r($conn);
            echo "</pre>";
        }
    // } else {
    //     echo "<script>alert('Confirm password must be same');</script>";
    //     header('location:register.php');
    //     exit;
    // }

    $_SESSION['name'] = $name;
    $_SESSION['workspace'] = $workspace;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;
    $_SESSION['pin'] = $pin;
    $_SESSION['country'] = $country;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['password'] = $password;
    $_SESSION['cpassword'] = $cpassword;

}
