<?php
require 'includes/common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($pass);
$select_query="select id, email from users where email='$email' and password='$password'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
echo "$email<br>";
echo "$pass<br>";
echo "$password";

if(!mysqli_num_rows($select_query_result))
{
   
   header ('location:login.php?login_error=Inavlid credentials...!');
    
}
else
{
    $row= mysqli_fetch_array($select_query_result) or die(mysqli_error($con));
echo $row['id'];
echo $row['email'];
$_SESSION['email']=$email;
$_SESSION['user_id']=$row['id'];

echo 'Login successful...!';
header('location:home.php');
}
?>
