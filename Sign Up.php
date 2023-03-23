<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}

?>
<!Doctype html>
<html>
    <head>
        <?php include 'includes/bootstrap.php';  ?>
        <title>
            Sign Up Page
        </title>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container">
        <div class="row">
            <div class="col-sm-5 ">
                <br>
                <br>
                <br>
                <br>
                <img src="img/s0.jpg" class="img-responsive">
            </div>
            <div class="col-sm-5 col-sm-offset-2">
                <h1>
                    SIGN UP
                </h1>
                <br>
                <form action="signup_script.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" Placeholder="Name" required="true">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" Placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <?php
                                    if(isset($_GET['email_error'])){
                                    echo $_GET['email_error']; 
                                    }
                                    ?>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" Placeholder="Password" required="true" pattern=".{6,}">
                                <?php 
                                if(isset($_SET['password_error']))
                                {
                                    echo $_GET['password_error'];
                                }
                                ?>
                    </div>
                    
                    <div class="form-group">
                        <input type="number" name="mobile_no" class="form-control" Placeholder="Contact" required="true" pattern="^\d{3}-\d{3}-\d{4}$">
                                <?php
                                if(isset($_GET['mobile_no_error']))
                                {
                                    echo $_GET['mobile_no_error'];
                                }
                                ?>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" Placeholder="City" required="true">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" Placeholder="Address" reqquired="true">
                    </div>
                    
                    <div class="form-group" style="float: right;">
                        
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          
                    </div>
                    <p class="text-danger">
                              <?php 
                              if(isset($_GET['e_error']))
                              {
                                  echo $_GET['e_error'];
                              }
                              ?>
                    </p>
                </form>
                <br>
                <br>
                  <br>
                <p>Already have an account ? <a href="Login.php">Login here. </a></p>
            </div>
        </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>