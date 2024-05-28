<?php
session_start();
include "config.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projektly</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    type="text/css" />
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <!--  header starting  -->
  <div class="wrapper-header">
    <div class="py-1 bg-dark d-flex" style="justify-content: center; align-items: center">
      <img src="img/offer.png" alt="" width="30" />
      <h6 class="text-light">Grab your special offer</h6>
    </div>
    <div class="navbar px-5 py-1" style="background-color: #0C2461 ; align-items: center;">
      <div class="logo">
        <h3><a class="text-light" style="text-decoration: none;" href="index.php">Projektly</a></h3>
      </div>
      <div class="pages">
        <ul class="d-flex pageList" style="align-items: center;">
          <li><a href="#" onclick="pagenot()">Pricing</a></li>
          <li><a href="#" onclick="pagenot()">About Us</a></li>
          <li><a href="#" onclick="pagenot()">Contact</a></li>
          <li>
            <a class="btn px-4 py-2" id="dark-btn">Dark Mode</a>
            <a class="btn border px-4 py-2" id="light-btn" style="display: none;">Light Mode</a>
          </li>
          <?php if (isset($_SESSION['name'])) {
            ?>



            <select name="" id="selectOpt" class="form-control mx-2 text-center fs-6" style="width: 100px; border:1px solid #0C2461;" onchange="location = this.value;">
              <option value="">
                <li>
                  <p><?php echo $_SESSION['name']; ?></p>
                </li>
              </option>
              <option value="logout.php">
              <li><a href="">Logout</a></li>
              </option>
              <option value="profile.php">
              <li><a href="">profile</a></li>
              </option>
            </select>
            <!-- <li>
              <p><?php //echo $_SESSION['name']; ?></p>
            </li> -->
            <!-- <li><a href="logout.php">Logout</a></li> -->



            <?php
          } else {
            ?>
            <li><a href="login.php" class="btn border text-light px-4 py-2 mx-1">Sign in</a></li>
            <?php
          } ?>

        </ul>
      </div>
    </div>
  </div>
  <!--  header ending  -->