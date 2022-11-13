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
                 SELLING UNIT
             </li>
            </ul>
            </div>
    

     
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div>
</div>
      </div>
  <div class="col-md-9">
  <dic class="container">
  <div class="panel panel-default">
          
          <div class="panel-body">
          <h1>Recycled PVC</h1>
          <p>“Recycled PVC is a discarded PVC product, or semi-finished product, that is diverted from waste for use within a new product; processing waste is included provided it cannot be reused in the same process that generated the waste
          </p>
          </div></div></div>
          
          <div class="col-sm-5 col-sm-4">
          <img class="img-responsive" src="1.jpg" alt="product-1">
        </div>

    <div class="col-md-5 col-sm-5">
      <div class="panel panel-default">
        <div class="panel-heading">product weight</div>
        <div class="panel-body">
        <div class="col-md-12">
        <input type="text" name="quantity" class="form-control" value="1"> 
        
        <a href="cart.php" class="btn btn-primary">
         <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                              </a></div>
        </div>
</div>
</div>

<div class="col-md-1 col-md-1 single">
<img class="img-responsive" src="a.jpg" alt="product-1">
</div></div>


 </div>
</div>
</div>
</div>

<?php  
    include("includes/footer.php");
?>



</body>
</html>