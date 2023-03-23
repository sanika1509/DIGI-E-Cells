<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
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
   <?php
   include 'includes/header.php';
   include 'check-if-added.php';
      ?> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 1
                    </div>
                    <div class="panel-body  text-center">
                         <center><img src="img/1.jpg" class="img-responsive" alt="fault"> </center>
                        <p> 4 GB RAM | 64 GB ROM | 
                        16.59 cm (6.53 inch) HD+ Display
                        13MP Rear Camera | 5MP Front Camera
                        5000 mAh Lithium Battery
                        MediaTek Helio G25 Processor
                        <br>
                        Price: 14000.
                        </p>
                         <?php if (!isset($_SESSION['email'])) 
                            { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php
                            } 
                            else 
                            { 
                            ////We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) 
                            { 
                            //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else 
                            { ?> 
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                            } 
                            } 
                            ?>
                        
                    </div>
                    
                </div>
                </div>
                
                     <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 2
                    </div>
                    <div class="panel-body  text-center">
                        <center><img src="img/2.jpg" class="img-responsive" alt="fault"></center>
                        <p> 2 GB RAM | 32 GB ROM | Expandable Upto 256 GB
                        16.51 cm (6.5 inch) HD+ Display
                        8MP Rear Camera | 5MP Front Camera
                        5000 mAh Battery
                        Octa-core Processor
                        <br>
                        Price: 10000
                        </p>
                        
                         <?php if (!isset($_SESSION['email'])) 
                            { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php
                            } 
                            else 
                            { 
                            ////We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(2)) 
                            { 
                            //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else 
                            { ?> 
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                            } 
                            } 
                            ?>
                        
                    </div>
                   
                </div>
            </div>
                
                     <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 3
                    </div>
                    <div class="panel-body  text-center">
                        <center> <img src="img/3.jpg" class="img-responsive" alt="fault"> </center>
                        <p>3 GB RAM | 32 GB ROM |
                        14.48 cm (5.7 inch) HD+ Display
                        13MP + 2MP | 8MP Front Camera
                        3000 mAh Battery,
                        Snapdragon Octa Core Processor
                        <br>
                        Price:10500
                        </p>
                        
                         <?php if (!isset($_SESSION['email'])) 
                            { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php
                            } 
                            else 
                            { 
                            ////We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(3)) 
                            { 
                            //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else 
                            { ?> 
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                            } 
                            } 
                            ?>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mobile 4
                        </div>
                    <div class="panel-body  text-center">
                        <center>
                            <img src="img/4.jpg" class="img-responsive" alt="fault"> 
                        </center>
                        <p>
                        1 GB RAM | 16 GB ROM | Expandable Upto 32 GB
                        12.7 cm (5 inch) HD Display
                        8MP Rear Camera | 3.2MP Front Camera
                        2500 mAh Battery
                        Cortex A7 Processor Processor
                        <br>
                        Price:7500
                        </p>
                        
                         <?php if (!isset($_SESSION['email'])) 
                            { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php
                            } 
                            else 
                            { 
                            ////We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(4)) 
                            { 
                            //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else 
                            { ?> 
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                            } 
                            } 
                            ?>
                        
                    </div>
                    
                </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mobile 5
                        </div>
                        <div class="panel-body  text-center">
                            <center>
                                <img src="img/5.jpg" class="img-responsive" alt="fault"> 
                            </center>
                            <p>
                            2 GB RAM | 16 GB ROM | 
                            13.84 cm (5.45 inch) HD+ Display
                            8MP Rear Camera | 5MP Front Camera
                            3100 mAh Lithium Battery
                            Octa Core Processor.
                            
                             <br>
                            Price:9000
                            </p>
                             <?php if (!isset($_SESSION['email'])) 
                            { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php
                            } 
                            else 
                            { 
                            ////We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(5)) 
                            { 
                            //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else 
                            { ?> 
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                            } 
                            } 
                            ?>
                       
                        </div>
                       
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mobile 6
                        </div>
                        <div class="panel-body  text-center">
                            <center>    
                                <img src="img/6.jpg" class="img-responsive" alt="fault"> 
                            </center>
                            <p>
                            6 GB RAM | 128 GB ROM | 
                            16.51 cm (6.5 inch) Full HD+ Display
                            48MP + 2MP + 2MP | 16MP Front Camera
                            5000 mAh Battery
                            MediaTek G95 Processor
                            30W Charger
                             <br>
                            Price: 16500
                            </p>
                            
                            <?php if (!isset($_SESSION['email'])) 
                            { 
                            ?> 
                            <p>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php
                            } 
                            else 
                            { 
                            ////We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(6)) 
                            { 
                            //This is same as if(check_if_added_to_cart != 0) 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } 
                            else 
                            { ?> 
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php 
                            } 
                            } 
                            ?>
                           <!-- <button type="button" class="btn btn-primary btn-block">Add to cart</button>-->
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>   
        

    </body>
</html>