



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
        <li ><a href="#">SELLING UNIT</a></li>
        <li><a href="#">RECYCLOPEDIA</a></li>
        <li><a href="#">ENTERTAINMENT</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li class="active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
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
                 cart
             </li>
            </ul>
            </div>

            <div id="cart" class="col-md-9">
              <div class="panel">
              <div class="panel-body">
                <form action="cart.php" method="post" enctype="multipart/form-data">
                  <h1>Shopping cart</h1>

              
                  
                  <p class="text-muted">3 Items in your cart</p>
                  <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <tr>
                      <th>product</th>
                        <th>weight</th>
                        <th>unit price</th>
                        <th colspan="1">Delete</th>
                        <th colspan="2">Sub-total</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a href="#">PVC</a></td>
                        <td>2</td>
                        <td>150</td>
                        <td>
                        <input type="checkbox" name="remove[]">
                        </td>
                        <td>300</td>
                      
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td><a href="#">Compost</a></td>
                        <td>10</td>
                        <td>150</td>
                        <td>
                        <input type="checkbox" name="remove[]">
                        </td>
                        <td>1500</td>
                      
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td><a href="#">Black Glass</a></td>
                        <td>5</td>
                        <td>300</td>
                        <td>
                        <input type="checkbox" name="remove[]">
                        </td>
                        <td>1500</td>
                      
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th colspan="4">Total</th>
                      <th colspan="2">3300</th>
                      </tr>
                    </tfoot>
                  </table>
                    <div class="box-footer">
                      <div class="pul-right">
                      <button type="submit" name="update" value="update cart" class="btn btn-default">
                        <i class="fa fa-refresh"></i>update cart
                      </button>
                      </div>
                    </div>


                    
                  </div>


                </form>
              </div>
              </div>
            </div>

            
    <div>

          <div class="col-md-3">
              <div id="order-summery" class="panel">
                <div class="panel-header">
                  <h3>Order Summery</h3>
                  </div>
                  <div class="panel-body">
                  <p class="text-muted">
                    Delivery charges are calculated using nearest city you entered and Rs.10 for every kilometer from your nearest town.
                  </p>
                  <div class="table-responsive">
                      <table class="table">
                          <tbody>
                          <tr>
                            <td>Order Sub total</td>
                            <th>Rs.3300</th>
                          </tr>
                          <tr>
                            <td>Delivery charges</td>
                            <th>Rs.700</th>
                          </tr>
                          <tr>
                            <td>total</td>
                            <th>Rs.4000</th>
                          </tr>
                          </tbody>
                      </table>
                  </div>
                  <div>
              </div>
            </div>
            
                  
               


 </div></div></div></div>

<?php  
    include("includes/footer.php");
?>


</body>
</html>