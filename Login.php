 <!DOCTYPE html>  
<html>  
<head>  
<title>Login page</title>  
<?php
require 'includes/bootstrap.php';
?>
</head>  
<body>  
    <?php include 'includes/header.php';  ?>
           <br />  
           <div class="container" >  
               <div class="col-xs-8 col-xs-offset-2">
                   <div class="jumbotron text-center">
                       <form action="login_submit.php" method="post">
                       <h2>
                           Want to be Login...?
                             </h2>
                           <p class="text-danger">
                          <?php 
                         
                                    if(isset($_GET['login_error']))
                                    {
                                    echo $_GET['login_error'];
                                    }
                                
                                    
                           ?>
                               </p>
                           <hr>
                           <p class="text-primary">
                               <a href="index.php"><span class="glyphicon glyphicon-hand-up"></span>Click on login...!</a> 
                           </p>
                           
                     
                       </form>
                   </div>
               </div>
                
               
            
           </div>
      </body>  
 </html>  