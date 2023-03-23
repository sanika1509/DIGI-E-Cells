<?php

require 'includes/common.php';
$email=$_POST['email'];
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email))
{
    header('location:Sign Up.php?email_error=Enter correct email...!');
}
$pass=$_POST['password'];
if(strlen($pass)<6)
{
    header('location: signup.php?password_error=enter correct password');
}
$mobile_no=$_POST['mobile_no'];
$regex_mobile_no="/^[0-9]{10}+$/";
if(!preg_match($regex_mobile_no,$mobile_no))
{
    header('location: Sign Up.php?mobile_no_error=Mobile no must be 10 digit...!');
   
}

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$mobile_no=$_POST['mobile_no'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$password=md5($pass);

$select_query="select id from users where email='$email';";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)>0)
{
    echo 'email is already exists';
    header('location:Sign Up.php?e_error=Email already exists...!');
}
else
{
    $insert_query="insert into users (name, email, password, mobile_no, city, address) values ('$name', '$email', '$password', $mobile_no, '$city', '$address')";
    //echo"insert into users (name, email, password, mobile_no, city, address) values ('$name', '$email', '$password', '$mobile_no', '$city', '$address'";
    $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    

$u_id=mysqli_insert_id($con);
$_SESSION['email']=$email;
$_SESSION['user_id']=$u_id;
header('location:home.php');
}
?>