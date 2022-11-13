<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<li><a href="#">HOME</a></li>
        <li class="active"><a href="#">SELLING UNIT</a></li>
        <li><a href="#">RECYCLOPEDIA</a></li>
        <li><a href="#">ENTERTAINMENT</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="shopping cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="content">
    <div class="container">
    
            <div class="col-md-12">
            <ul class="breadcrumb">
            <li>
                <a href="home.php">HOME</a>
             </li>
             <li>
                Contact us
             </li>
            </ul>
            </div>
    

     
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div></div></div>

            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading">
                    <h2>Feel free to contact us</h2>
                    <p class="text-muted">
                        If you have any question, feel free to contact us.
                    </p>
                    <form action="contact.php">
                    <div class="form-group">
                        <label>Name</lable>
                        <input type="text" class="form-control" name:"name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</lable>
                        <input type="text" class="form-control" name:"Email" required>
                    </div>
                    <div class="form-group">
                        <label>Subject</lable>
                        <input type="text" class="form-control" name:"subject" required>
                    </div>
                    <div class="form-group">
                        <label>message</lable>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary"></button>
                        <i class="fa fa-user-md"></i>send
                    </div>
                    </form>

                
                    </div>
                </div>
            </div>



           
      

</div>
</div>
      <?php  
    include("includes/footer.php");
?>


</body>
</html>