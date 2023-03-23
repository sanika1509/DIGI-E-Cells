<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Commerce</title>
        <?php include 'includes/bootstrap.php';?>
    </head>
    <body>
       <?php include 'includes/header.php'; ?>
        <div class="container">
        <div class="row">
            <div class="col-xs-9">
        <h1>Live Support</h1>
        <h3>24 Hours| 7 days a week| 365 days a year Live Technical Support|</h3>
        
        <p>
            It is long established fact that a reader will be distracted by the readable
            content of page a page when looking at its layout.the point of using Lorem
            Ipsum is that it has a more or less normal distribution of letters. There are 
            many validations of passages of Loream Ipsum available , but the majority 
            has suffered alteration in some form, by injected some humour, or randomized 
            words which dont look even slightly believable. If you are going to use a 
            passage of Loreum Ipsum, you need to be sure there isn't anything embarrasing
            hidden in the middle of text.
        </p>
            </div>
        <div class="col-xs-2 col-sm-offset-1 gap">
        <img src="img/s6.png" alt="anytime available" class="img-responsive">
        </div>
        </div>
            <div class="row">
                <div class="col-sm-8">
                    <h1>
                        CONTACT US
                    </h1>
                    <form action="contact_us_submit.php" method="post">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                         <?php
                                    if(isset($_GET['email_error'])){
                                    echo $_GET['email_error']; 
                                    }
                                    ?>
                        </div>
                        
                        <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="msg" class="form-control" rows="5" cols="60">
                            
                        </textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>   
                            <p class="text-success">  <?php
                                    if(isset($_GET['msg'])){
                                    echo $_GET['msg']; 
                                    }
                                    ?>
                            </p>
                        </div>
                        
                    </form>
                </div>
                
                <div class="col-sm-4">
                    <h1>
                        COMPANY INFORMATION
                        <br>
                    </h1>
                    500 lorem Ipsum Dolor Sit,
                    <br/>
                    22-56-2-9 Sit Amet, Lorem,
                    <br/>   
                    USA
                    <br/>
                    phone:(00)222 666 444
                    <br/>
                    Fax:(000)000 00 00 0
                    <br/>
                    Email: info@mycompany.com
                    <br/>
                    Follow on: Facebook, Twitter
                    <br/>
                </div>
            </div>
        </div>
      <?php include 'includes/footer.php';?>
    </body>
</html>
