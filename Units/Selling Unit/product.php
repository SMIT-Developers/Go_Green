<?php
 include("includes/db.php");
 ?>

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
  
  
</head>
<body>


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
        <li class="active"><a href="#">Market place</a></li>
        <li><a href="#">RECYCLOPEDIA</a></li>
        <li><a href="#">ENTERTAINMENT</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php 
  include("shop.php");
?>
 
<div id="hot">
  <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>
                    OUR PRODUCTS
                </h2>
 
            </div>      
 
        </div>
 
    </div>
</div>
  
<div id="content" class="container">
    <div class="row">

     
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="1.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">PVC</a>
                    </h3>
                    <P class="price">Rs.150/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
        </div>
    
       

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="2.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">PETE</a>
                    </h3>
                    <P class="price">Rs.200/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
        </div>
     


        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="3.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">HDPE</a>
                    </h3>
                    <P class="price">Rs.250/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
        </div>
     
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="4.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">White Glass</a>
                    </h3>
                    <P class="price">Rs.200/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
      </div>   
        </div>
        <div class="row">
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="5.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">Brown Glass</a>
                    </h3>
                    <P class="price">Rs.250/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
        </div>
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="6.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">Green Glass</a>
                    </h3>
                    <P class="price">Rs.250/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
        </div>
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="7.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">Black Glass</a>
                    </h3>
                    <P class="price">Rs.300/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
                </div>
             </div>
        </div>
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                <img class="img-responsive" src="8.jpg" alt="product-1">
                </a>
                <div class="text">
                    <h3>
                    <a href="details.php">Compost</a>
                    </h3>
                    <P class="price">Rs.150/=</P> 
                    <p class="button">
                        <a href="details.php" class="btn btn-default">view Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                              </i>
                        </a>
                     </p>                
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