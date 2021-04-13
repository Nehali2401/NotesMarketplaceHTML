<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Title -->
    <title>Notes Marketplace - Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Costom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark-1" id="home-nav">
        <div class="container">
            <a class="navbar-brand" href="home.html"><img src="images/Homepage/top-logo.png" alt="logo" class="img-responsive"></a>
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
                        <a class="nav-link" href="ContactUs.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <div class="login-btn">
                            <a class="nav-link btn btn-general btn-white" href="login.html" id="home-login-btn-white" role="button">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="img-overlay">
        <div id="homebanner">
            <img src="images/Homepage/banner-with-overlay.jpg" alt="Home-page-banner" class="img-responsive">
        </div>
        <div id="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div>
                        <h1>Download Free/Paid Notes or Sale your Book</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Recusandae culpa, adipisci quo placeat Recusandae culpa, adipisci quo placeat.</p>
                        <div id="learnmore-btn">
                            <a class="btn btn-general btn-transparent" href="#work" title="Learn More" role="button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="about">

        <div class="container">
            <div class="row">

                <!-- Horizontal heading -->
                <div class="col-md-4 horizontal-heading" id="about-heading">
                    <h2>About<br>NotesMarketPlace</h2>
                </div>

                <div class="col-md-8" id="about-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam vero voluptates labore quos perspiciatis qui maxime alias quod, sunt ex, deleniti dolor suscipit voluptate atque, excepturi enim ipsa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia similique deleniti dolore illum. Sapiente eius ratione provident.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam cupiditate incidunt nemo sed eaque suscipit consequatur asperiores labore unde accusamus illum quaerat quos, ipsa aperiam, animi neque reprehenderit? Totam, nostrum!</p>
                </div>
            </div>
        </div>

    </section>

    <section id="work">

        <div class="container">
            <div class="row">
                <!-- Horizontal heading -->
                <div class="col-md-12 text-center horizontal-heading" id="work-heading">
                    <h2>How it Works</h2>
                </div>
            </div>
            <div class="row">

                <!-- Download -->
                <div class="col-md-6 workdiv">
                    <div class="workdiv-img">
                        <img src="images/Homepage/download.png" alt="Download" class="img-responsive img-circle">
                    </div>
                    <h4>Download Free/Paid Notes</h4>
                    <p>Get Material for your Course etc.</p>
                    <div id="work-down-btn">
                        <a class="btn btn-general btn-purple" href="search.html" title="Download" role="button">Download</a>
                    </div>
                </div>

                <!-- Sell Book -->
                <div class="col-md-6 workdiv">
                    <div class="workdiv-img">
                        <img src="images/Homepage/seller.png" alt="Download" class="img-responsive img-circle">
                    </div>
                    <h4>Seller</h4>
                    <p>Upload and Download Course and Material etc.</p>
                    <div id="work-sell-btn">
                        <a class="btn btn-general btn-purple" href="Dashboard.html" title="Sell Book" role="button">Sell Book</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Customers -->
    <section id="customer">
        <div class="container">
            <div class="row">
                <!-- Horizontal heading -->
                <div class="col-md-12 text-center horizontal-heading" id="customer-heading">
                    <h2>What our Customers are Saying</h2>
                </div>
            </div>
            <div id="cutomer-boxes">
                <div class="row">

                    <!-- Customer-01 -->
                    <div class="col-md-6" id="customer-1">
                        <div class="customer-card">
                            <div class="row">
                                <div class="col-md-3 customer-img">
                                    <img src="images/customer/team-1.jpg" alt="customer" class="img-responsive rounded-circle">
                                </div>
                                <div class="col-md-9 customer-info">
                                    <div class="cutomer-name">
                                        <p>Walter Meller</p>
                                    </div>
                                    <div class="cutomer-desg">
                                        <p>Founder &amp; CEO, Matrix Group</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 customer-text">
                                    <p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum culpa, temporibus modi expedita saepe a ipsa alias. Similique tenetur corporis ut iure, voluptates."</i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer-02 -->
                    <div class="col-md-6" id="customer-2">
                        <div class="customer-card">
                            <div class="row">
                                <div class="col-md-3 customer-img">
                                    <img src="images/customer/team-2.jpg" alt="customer" class="img-responsive rounded-circle">
                                </div>
                                <div class="col-md-9 customer-info">
                                    <div class="cutomer-name">
                                        <p>Jonnie Riley</p>
                                    </div>
                                    <div class="cutomer-desg">
                                        <p>Employee, Curious Snakcs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 customer-text">
                                    <p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum culpa, temporibus modi expedita saepe a ipsa alias. Similique tenetur corporis ut iure, voluptates."</i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- Customer-03 -->
                    <div class="col-md-6" id="customer-3">
                        <div class="customer-card">
                            <div class="row">
                                <div class="col-md-3 customer-img">
                                    <img src="images/customer/team-3.jpg" alt="customer" class="img-responsive rounded-circle">
                                </div>
                                <div class="col-md-9 customer-info">
                                    <div class="cutomer-name">
                                        <p>Amilia Luna</p>
                                    </div>
                                    <div class="cutomer-desg">
                                        <p>Teacher, Saint Joseph High School</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 customer-text">
                                    <p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum culpa, temporibus modi expedita saepe a ipsa alias. Similique tenetur corporis ut iure, voluptates."</i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer-04 -->
                    <div class="col-md-6" id="customer-4">
                        <div class="customer-card">
                            <div class="row">
                                <div class="col-md-3 customer-img">
                                    <img src="images/customer/team-4.jpg" alt="customer" class="img-responsive rounded-circle">
                                </div>
                                <div class="col-md-9 customer-info">
                                    <div class="cutomer-name">
                                        <p>Daniel Cardos</p>
                                    </div>
                                    <div class="cutomer-desg">
                                        <p>Software Engineer, Infinitum Company</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 customer-text">
                                    <p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum culpa, temporibus modi expedita saepe a ipsa alias. Similique tenetur corporis ut iure, voluptates."</i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <hr>
        <div class="container">
            <div class="row" id="footer-content">
                <div class="col-xs-7 col-sm-7 col-md-6">
                    <div class="footer-line">
                        <p>Copyright &copy; Tatvasoft All rights reserved.</p>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-6 text-right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>

</body>

</html>