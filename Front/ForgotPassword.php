<?php  include "include/header.php"; ?>
<?php
    forgot_password();
?>

<?php include ("page_header.php"); ?>



<html lang="en">

<body>
    <section id="forgot-pass-bg-img">
        <div id="bg-img">
            <img src="images/pre-login/banner-with-overlay.jpg" class="img-resposive">
        </div>
    </section>
    <section id="forgot-password">
        <div id="content" class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <!-- Logo -->
                    <div id="fp-top-logo" class="text-center">
                        <img src="images/pre-login/top-logo.png" alt="Logo" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3">
                    <div id="fp-box-white">
                        <div id="fp-box-head" class="text-center">
                            <h3>Forgot Password?</h3>
                            <p>Enter your email to reset your password</p>
                        </div>

                        <div id="forgot-pass-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" name="forgot_pass_email" class="form-control" id="forgot-password-email" placeholder="Enter your email">
                                </div>

                               <div class="form-group">
                                    <button type="submit" name="forgot_pass_submit" class="btn btn-gneral btn-purple" id="login-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "page_footer.php"; ?>
    
</body>

</html>