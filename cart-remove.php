<?php
require 'includes/common.php';
$product_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
echo $product_id."<br>";
echo $user_id."<br>";
$delete_query="delete from users_products where user_id=$user_id and product_id=$product_id;";
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
if($delete_query_result)
{
   
    header('location:cart.php');
    
}

?>