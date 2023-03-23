<?php

require 'includes/common.php';
if (!isset($_SESSION['email'])) 
{ 
    header('location: index.php'); 
    
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
      
         <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table">
                        <tr>
                        <th>Item number</th>
                        <th>Price</th>
                        <th></th>
                        </tr>
                        <?php
                        $user_id=$_SESSION['user_id'];
                        $sum=0;
                        $id="0";
                        $select_query="select * from users_products up inner join products p on up.product_id=p.id where up.user_id=$user_id and up.status='added to cart' ;";
                        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
                        if(mysqli_num_rows($select_query_result)==0)
                        {?>
                            <p class="text-warning">
                            Add item to the cart first...!
                        </p>
                        <?php
                        }
                        else
                        {
                            while ($row = mysqli_fetch_array($select_query_result)) 
                            {
                                $sum=$sum+$row['price'];
                                $id=$id.",".$row['id'];
                            
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['product_id'];  ?>
                            </td>
                            <td>
                                <?php echo $row['price'];  ?>
                            </td>
                            <td>
                                <a href="cart-remove.php?id=<?php echo $row['product_id'];?>" class='remove_item_link'>Remove</a>
                            </td>
                            <?php
                            }?>
                            <tr>
                           
                            <td>Total</td>
                            <td><?php echo "$sum"; ?></td>
                            <!-- <td><button type="button" href="success.php"  class="btn btn-primary"> Confirm Order</button></td>-->
                            <td> <a href="success.php?id=<?php echo $id ?>" name="add" value="add" class="btn btn-primary">Confirm Order</a></td>
                            </tr>
                            <?php
                            }?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        
<?php include 'includes/footer1.php'; ?>
    </body>
</html>
        