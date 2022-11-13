<?php

session_start();

  include("connection.php");
 
 
  
  if (isset($_POST['login'])) {
    $cus_email = $_POST['mail'];
    $cus_password= $_POST['pass'];
    

      
    $sql="SELECT * FROM `customer` WHERE `cus_email`='{$cus_email }' AND  `cus_password`='{$cus_password}'";
      $result = (mysqli_query($conn, $sql));
      $count  = mysqli_num_rows($result);
      if($count==0) {

        echo '<h3>Invalid username or password</h3>';
      } else {
      
        header("location:home.php");
          
      }
    
   
    
  
 
             $_POST['mail']="";
             $_POST['pass']="";
      
}
?>

  
         
      
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lstyle.css">

</head>
<body>

<div class="hero-image"></div>
  <div class="loginbox">
      <img src="user.jpg" class="user">

      
      
      <h2>Sign in to your Go Green acoount</h2>

      <form method="POST" action="login.php">
     
        <p>Username</p>
        <input type="text" name="mail" placeholder="Enter your username">

        <p>Password</p>
        <input type="password" name="pass" placeholder="Enter your password"><br>
        <input type="submit" name="login" value="Sign In"><br><br>

        <a href="#">Forgot Password</a><br><br>

        <p>Don't have an account</p><br>
        <a href="register.php">Create an account</a>

        


        </form>

    
    
    
  </div>
</div>



</body>
</html>