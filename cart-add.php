<?php
$product_id=$_GET['id'];
require 'includes/common.php';
$user_id=$_SESSION['user_id'];
echo"$product_id<br>$user_id";
$insert_query="insert into users_products (user_id, product_id, status) values ('$user_id', '$product_id', 'Added to cart');";
$insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:home.php');
?>
