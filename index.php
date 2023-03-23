<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header ('location: home.php');
}
function login()
{
?>

<div id="myModal" class="modal fade">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">×</button>  
                     <h1 class="modal-title">LOGIN</h1>  
                </div>  
                <div class="modal-body">  
                    <p>Don't have an account ?<a href="Sign Up.php">Register</a></p>
                    <form action="login_submit.php" method="post">
                     <label>Username</label>  
                     <input type="email" name="email" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <button type="submit" name="submit"  class="btn btn-primary">Login</button>  
                       <br>
                         <br>
                     <p><a href="#">Forgot password?</a></p>
                    </form>
                  
                </div>  
           </div>  
      </div>  
 </div> 
<?php   
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Commerce</title>
        <?php include 'includes/bootstrap.php';?>
    </head>
    <body>
       <?php include 'includes/header.php'; ?>
        
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
                          <button href="#myModal" data-toggle="modal"  class="btn btn-primary btn-block">Order Now</button>
                        
                        
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
                        <button href="#myModal" data-toggle="modal"  class="btn btn-primary btn-block">Order Now</button>
                        
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
                        <button href="#myModal" data-toggle="modal"  class="btn btn-primary btn-block">Order Now</button>
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
                        <button href="#myModal" data-toggle="modal"  class="btn btn-primary btn-block">Order Now</button>
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
                            <button href="#myModal" data-toggle="modal"  class="btn btn-primary btn-block">Order Now</button>
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
                           <!-- <button type="button" class="btn btn-primary btn-block">Order Now!</button>-->
                           <button href="#myModal" data-toggle="modal"  class="btn btn-primary btn-block">Order Now</button>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>   
        
      <?php include 'includes/footer.php';?>
    </body>
</html>
