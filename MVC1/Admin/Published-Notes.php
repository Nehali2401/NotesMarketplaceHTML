<html lang="en">

<head>

      <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Title -->
    <title>Published Notes - Notes Marketplace</title>

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

  


 <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <a class="navbar-brand" href="Dashboard.php"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="notesdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Notes-Under-Review.php">Notes Under Review</a>
                            <a class="dropdown-item" href="Published-Notes.php">Published Notes</a>
                            <a class="dropdown-item" href="Downloads-notes.php">Downloaded Notes</a>
                            <a class="dropdown-item" href="Rejected-notes.php">Rejected Notes</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Members.php">Members</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="reportsdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Spam-Reports.php">Spam Reports</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="settingsdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Manage-Syatem-Configuration.php">Manage System Configuration</a>
                            <a class="dropdown-item" href="Manage-Administrator.php">Manage Administrator</a>
                            <a class="dropdown-item" href="Manage-Category.php">Manage Category</a>
                            <a class="dropdown-item" href="Manage-Type.php">Manage Type</a>
                            <a class="dropdown-item" href="Manage-Country.php">Manage Countries</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="userdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/admin.png" alt="User Image" class="img-responsive rounded-circle" id="nav-user-img"></a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="My-Profile.php">Update Profile</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="login.php" id="user-logout">Logout</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="login-btn">
                            <a class="nav-link btn btn-general btn-purple" href="login.php" id="home-login-btn" role="button">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
         
        <section id="published-note-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="published-note-sec-head">
                        <p>Published Notes</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Seller</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-6">
                    <div class="published-note-search">
                        <div class="form-group">
                            <select class="form-control" id="published-note-by-seller">
                                <option value="" disabled selected>Select Seller</option>
                                <option value="Khayati">Khayati</option>
                                <option value="Rahul">Rahul</option>
                                <option value="Mayur">Mayur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 text-right">
                    <div class="published-note-search">
                        <input type="text" class="form-control" id="published-note-search-field" placeholder="Search">
                        <div class="published-note-search-btn" id="notes-under-review-btn">
                            <a class="btn btn-general btn-purple" href="#" title="Search" role="button">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <section id="published-note-info">
       
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover" id="published-note-info-table">
                        <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Note Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sell Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Seller</th>
                                <th scope="col"></th>
                                <th scope="col">Published Date</th>
                                <th scope="col">Approved By</th>
                                <th scope="col">Number of Downloads</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="Note-details.php">Software Development</a></td>
                                <td>IT</td>
                                <td>Paid</td>
                                <td>$145</td>
                                <td>Rahul Shah</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-publisher-icon">
                                            <a href="Member-Details.php"><img src="images/Dashboard/eye.png" alt="View" class="img-risponsive"></a>
                                        </div>
                                    </div>
                                </td>
                                <td>04-01-2021, 12:10</td>
                                <td>Raj Sheth</td>
                                <td><a href="Downloads-notes.php">75</a></td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-published-note dropleft">
                                            <a id="published-note-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="Note-details.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="Note-details.php">Computer Basics</a></td>
                                <td>Computer</td>
                                <td>Paid</td>
                                <td>$100</td>
                                <td>Rakesh Shah</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-publisher-icon">
                                            <a href="Member-Details.php"><img src="images/Dashboard/eye.png" alt="View" class="img-risponsive"></a>
                                        </div>
                                    </div>
                                </td>
                                <td>05-01-2021, 05:13</td>
                                <td>Khayati Patel</td>
                                <td><a href="Downloads-notes.php">15</a></td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-published-note dropleft">
                                            <a id="published-note-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="Note-details.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="Note-details.php">Human Body</a></td>
                                <td>Science</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>Rahul Shah</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-publisher-icon">
                                            <a href="Member-Details.php"><img src="images/Dashboard/eye.png" alt="View" class="img-risponsive"></a>
                                        </div>
                                    </div>
                                </td>
                                <td>06-01-2021, 02:10</td>
                                <td>Raj Sheth</td>
                                <td><a href="Downloads-notes.php">3</a></td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-published-note dropleft">
                                            <a id="published-note-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="Note-details.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="Note-details.php">world war</a></td>
                                <td>History</td>
                                <td>Paid</td>
                                <td>$15</td>
                                <td>Rahul Shah</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-publisher-icon">
                                            <a href="Member-Details.php"><img src="images/Dashboard/eye.png" alt="View" class="img-risponsive"></a>
                                        </div>
                                    </div>
                                </td>
                                <td>08-01-2021, 11:10</td>
                                <td>Khayati Patel</td>
                                <td><a href="Downloads-notes.php">35</a></td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-published-note dropleft">
                                            <a id="published-note-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="Note-details.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="Note-details.php">Accounting</a></td>
                                <td>Account</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>RaJ Shah</td>
                                <td>
                                    <div class="action-img">
                                        <div class="view-publisher-icon">
                                            <a href="Member-Details.php"><img src="images/Dashboard/eye.png" alt="View" class="img-risponsive"></a>
                                        </div>
                                    </div>
                                </td>
                                <td>09-01-2021, 08:10</td>
                                <td>Raj Sheth</td>
                                <td><a href="Downloads-notes.php">45</a></td>
                                <td>
                                    <div class="action-img">
                                        <div class="action-published-note dropleft">
                                            <a id="published-note-action-dropdownMenu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/dots.png" alt="More" class="img-risponsive"></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="Note-details.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
    </section>
        
        <section id="dash-pagination">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
                              
                                
                                  
                                    
                                      
                                        
                                            
 
      
     
    
   
  
<br/>
  <br/>
  
  
  
  

   <!--Footer-->
        
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

    <!-- Custom JS -->
    <script src="js/script.js"></script>
    
</body>



</html>          


