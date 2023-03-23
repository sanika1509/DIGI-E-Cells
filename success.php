<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id=$_SESSION['user_id'];
$products=$_GET['id'];

$update_query="update users_products  set status='confirmed' where user_id=$user_id  and product_id in ($products)";

$update_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));

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
                <div class="col-xs-6 col-xs-offset-3" style="font-family: algeria;">
                <h4 class="text-center">Thank you for ordering from E-Store. The order shall be delivered to you shortly.
                <hr>
                Order some electronic items <a href="home.php" >here.</a>
                </h4>
            </div>
            </div>
        </div>
        
         <?php include 'includes/footer1.php';?>
    </body>
</html>
        

