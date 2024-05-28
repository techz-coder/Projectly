<?php 
include "inc/header.php";

if(!isset($_SESSION['name'])){
    header('location:login.php');
    exit;
}
?>

<div class="container">
    <h1 class="text-center">Profile</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <td><?php echo $_SESSION['name']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email']; ?>
            <a href="#" class="btn btn-primary">Change</a>
            </td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td><?php echo $_SESSION['mobile']; ?>
                <a href="#" class="btn btn-primary">Change</a>
            </td>
            </tr>
        </thead>

    </table>
</div>


<?php
include "inc/footer.php";
?>
