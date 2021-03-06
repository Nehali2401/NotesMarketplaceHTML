

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <title>Login Page - Notes Marketplace</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">  
    
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>


<body >
   
    <section class="container-fluid bg">
    
            <section class="row justify-content-center">
            
                                <div class='img'>
                                  <img  src='images/top-logo.png' class="im-5"/>
                                </div>
                <form class="form-container" action="login.php" method="post">
                             
                             <h3 class="text-center" class="lg-1">Login</h3>
                             <h5 class="text-center" class="lg-2">Enter your email address and password to login</h5>
                              <div class="form-group">
                               
                                <label id="email">Email </label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                               
                              </div>
                              
                              <br/>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <span class="psw" ><a style="text-decoration:none"  href="Forgot-Password.html">Forgot password? </a></span>
                               
                                <input id="exampleInputPassword1"   type="password" class="form-control" name="password" placeholder="Password" >
                                <span toggle="#exampleInputPassword1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                 <h6>The Password that you've entered is incorrect</h6>
                              </div>
                              <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                
                                <label class="form-check-label">Remember Me</label>
                              </div>
                              <br/>
                              <button type="submit" name="login" class="btn  btn-block" >LOGIN</button>
                              &nbsp;
                    <h5 class="text-center">Don't have an account?  <span id="signup"><a style="text-decoration:none"  href="#">Sign Up</a></span></h5>
                               

                </form>        
               
            </section> 
            

        </section>
    
    
    
    
    
    
    
<script src="js/jquery.min.js"></script>
   
<script src="js/bootstrap/bootstrap.js"></script>  
   
<script src="js/script.js"></script>     
    
</body>



</html>