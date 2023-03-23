<?php
 function check_if_added_to_cart($product_id)
 {
     $user_id=$_SESSION['user_id'];
     require 'includes/common.php';
     $select_query="SELECT * FROM users_products WHERE product_id='$product_id' AND user_id ='$user_id' and status='added to cart';";
     $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
      $result=mysqli_num_rows($select_query_result);
     if($result>=1)
     {
         return 1;
        
     }
     else {
         return 0;
          
     }
   
 }
 
 ?>