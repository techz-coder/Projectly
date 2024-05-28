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
            <h1 class="mb-3">Sign in here</h1>
            <form method="POST" action="loginQuery.php">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="your-email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="your-email" name="email" required
                            placeholder="example@gmail.com">
                    </div><br>
                    <div class="col-md-6">
                        <label for="your-name" class="form-label">Password</label>
                        <input type="password" class="form-control" id="your-name" name="password" required
                            placeholder="xxxxxxxxxxx">
                    </div>


                    <!-- it's google recaptch for next time starting -->
                    <!-- <div class="col">
                        <div id="google-recaptcha-checkbox"></div>
                    </div> -->
                    <!-- it's google recaptch for next time ending -->


                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <button data-res="<?php echo $sum; ?>" type="submit"
                                    class="btn btn-dark w-100 fw-bold">Login</button>
                            </div>
                        </div>
                        <h6><a href="register.php" class="" style=" margin:1rem; text-decoration: none;">Don't have an
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