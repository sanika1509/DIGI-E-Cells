<?php

require 'includes/common.php';
if (!isset($_SESSION['email'])) 
{ 
    header('location: index.php'); 
    
}
?>

<!doctype html>
<html>
    <head>
        <?php include 'includes/bootstrap.php'; ?>
        <title>
            Home page
        </title>
    </head>
    <body>
         <div class="row">
        <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>
                    <li><a href="index.php" class="navbar-brand"> E-Store</a></li>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php" class="navbar-link"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="settings.php" class="navbar-link" ><span class="glyphicon glyphicon-user" ></span>Settings</a></li>
                        <li><a href="logout.php" class="navbar-link"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                <h1>
                    Change Pasword
                </h1>
                <br>
                <form action="settings_script.php" method="post">
                    <div class="form-group">
                    <input type="password" name="old_password" class="form-control" required="true" placeholder="Old Password">
                    <p class="text-danger"><?php
                                    if(isset($_GET['error']))
                                    {
                                    echo $_GET['error']; 
                                    }
                                
                    ?>
                      </p>
                    </div>
                    
                    <div class="form-group">
                    <input type="password" name="new_password" class="form-control" required="true" placeholder="New Password">
                     <p class="text-danger">
                    <?php 
                         
                                    if(isset($_GET['warning']))
                                    {
                                    echo $_GET['warning']; 
                                    }
                                
                                    ?>
                    </p>

                    
                    <div class="form-group">
                    <input type="password" name="renew_password" class="form-control" required="true" placeholder="Re-type New Password">
                    
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        <p class="text-success">
                        <?php 
                         
                                    if(isset($_GET['msg']))
                                    {
                                    echo $_GET['msg']; 
                                    }
                                
                                    ?>
                      </p>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
        
         <?php include 'includes/footer1.php';?>
    </body>
</html>
        

