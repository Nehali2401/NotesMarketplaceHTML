<?php  include "include/header.php"; ?>
<?php

  contact_us();

?>


<?php include("page_header.php"); ?>

  <!-- Navigation Bar -->
  <?php include("Navigation.php"); ?>


<!DOCTYPE html>
<html lang="en">

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <a class="navbar-brand" href="home.html"><img src="images/Homepage/logo.png" alt="logo" class="img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="search.html">Search Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.html">Sell Your Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ContactUs.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <div class="login-btn">
                            <a class="nav-link btn btn-general btn-purple" href="login.html" id="home-login-btn" role="button">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="contactus-top-img">
        <img src="images/Search/banner-with-overlay.jpg" alt="Image" class="img-responsive">
        <div id="contactus-top-content">
            <h1>Contact Us</h1>
        </div>
    </section>

    <section id="contactus-heading">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="contactus-heading-bold">
                        <p>Get in Touch</p>
                    </div>
                    <div class="contactus-heading-norm">
                        <p>Let us know how to get back to you</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contactus-form-section">
        <div class="container">
            <form class="contactus-form-details">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" class="form-control" id="contactus-name" placeholder="Enter your full name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" id="contactus-email" aria-describedby="emailHelp" placeholder="Enter your email address">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" class="form-control" id="contactus-subject" placeholder="Enter your subject">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group comments">
                            <label for="Comments">Comments / Questions *</label>
                            <textarea class="form-control" id="contactus-comment" rows="8" placeholder="Comments..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div id="contactus-submit-btn">
                            <a class="btn btn-gneral btn-purple" href="#">Submit</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include "page_footer.php"; ?>
    
    <?php
   if(isset($_SESSION['user_email_id'])) {
       echo "<script>document.getElementById('contactus-email').readOnly = true;</script>";
   } 
?>

</body>

</html>