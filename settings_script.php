<?php

require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
    $old_pass= mysqli_real_escape_string($con,$_POST['old_password']);
    $new_password=mysqli_real_escape_string($con,$_POST['new_password']);
    $renew_pass=mysqli_real_escape_string($con,$_POST['renew_password']);
    echo "$old_pass<br>$new_password<br>$renew_pass";
    if(!(strlen($new_password)==strlen($renew_pass)))
    {
        
        header('location:settings.php?e_msg=Password doesnt match...!');
    }
    if(!($new_password==$renew_pass))
    {
      ;
        header('location:settings.php?error=Password doesnt match...!');
    }
    $old_password=md5($old_pass);
    $user_id=$_SESSION['user_id'];
    echo $user_id;
    $select_query="select password from users where id=$user_id";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($select_query_result);
    echo"password in database= ".$row['password'];
    $db_password=$row['password'];
    $updated_password=md5($new_password);
    
    if($old_password==$db_password)
    {
          if(!($new_password==$renew_pass))
            {
            header('location:settings.php?warning=Confirm Password doesnt match.Please re-enter');
            }
    else{
        $update_query="update users set password='$updated_password' where id=$user_id;";
        $update_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
       
        header('location:settings.php?msg=Password updated successfully...!');
        }
    }
    else
    {
        
        header('location:settings.php?error=Invalid password...!');
    }

?>