<?php

require 'includes/common.php';
$email=$_POST['email'];
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email))
{
    header('location:Sign Up.php?email_error=Enter correct email...!');
}


$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);

$msg=mysqli_real_escape_string($con,$_POST['msg']);

    $insert_query="insert into contact_us (name, email, message) values ('$name', '$email', '$msg')";
    //echo"insert into users (name, email, message) values ('$name', '$email', '$msg');";
    $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    header('location:Contact Us.php?msg=Your message is successfully send.');


?>