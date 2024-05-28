<?php
include "inc/header.php";

?>
<!-- slider starting -->
<div class="slider_parent">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider.png" class="d-block w-100" alt="...">
                <div class="overlay-text">
                    <h1 class="font-weight-light">THE ULTIMATE PROJECT
                        <br>
                        MANAGEMENT TOOL
                        UNVEILED!
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvamVjdCUyMG1hbmFnZW1lbnR8ZW58MHx8MHx8fDA%3D"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://toggl.com/blog/wp-content/uploads/2020/12/web-design-project-management-software.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- slider ending -->

<!-- contact form starting -->



<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <h1 class="mb-3">Sign up here</h1>
            <form id="register_form" method="post" action="insertQuery.php">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="workspace-name" class="form-label">Workspace Name</label>
                        <input type="text" class="form-control" id="workspace-name" name="workspace" required
                            placeholder="Workspace Name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="example@gmail.com">
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required
                            placeholder="Enter a location">
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required placeholder="City">
                    </div>
                    <div class="col-md-6">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" required placeholder="state">
                    </div>
                    <div class="col-md-6">
                        <label for="pin" class="form-label">Pincode/Zipcode</label>
                        <input type="number" class="form-control" id="pin" name="pin" required placeholder="XXXXXX">
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country" required
                            placeholder="India">
                    </div>
                    <!-- <div class="col-md-6">
                        <label for="mobile" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="mobile" name="mobile" required
                            placeholder="0123456789">
                    </div> -->


                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInputGroup">Contact Number</label>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+91</div>
                            </div>
                            <input type="number" class="form-control" id="inlineFormInputGroup" name="mobile" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required
                            placeholder="xxxxxxxxxxx">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" name="cpassword" required
                            placeholder="xxxxxxxxxxx">
                    </div>
                    <div class="col-md-12">
                        <label for="terms" class="form-label">Terms and conditions</label>
                        <input type="checkbox" id="password" name="terms" required>
                    </div>
                    <div class="col-md-12">
                        <label for="subscribe" class="form-label">Subscriber to newsletter</label>
                        <input type="checkbox" id="password" name="subscribe" required>
                    </div>


                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="submit" value="Register" name="register_btn" id="register"
                                    class="btn btn-dark w-100 fw-bold">
                            </div>
                        </div>
                        <h6><a href="login.php" style=" margin:1rem; text-decoration: none;">Already have an
                                account</a></h6>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- contact form ending -->
<?php
include "inc/footer.php";
?>
