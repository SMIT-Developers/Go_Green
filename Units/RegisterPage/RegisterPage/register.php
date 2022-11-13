<?php
session_start();

  include("connection.php");
  

print_r($_POST);

if(isset($_POST['create'])){
        $cus_id=(int)rand(10,10000);
        $cus_fname= $_POST['name1'];
          $cus_lname = $_POST['name2'];
          $cus_city = $_POST['city'];
          $cus_postal_code = (int)$_POST['postal'];
          $cus_phone_no = (int)$_POST['phnumber'];
          $cus_email = $_POST['mail'];
          $cus_password= $_POST['pass'];

        
         $sql= "INSERT INTO `customer` (`cus_Id`,`cus_fname`, `cus_lname`, `cus_city`,`cus_postal_code`, `cus_phone_no`,`cus_email` ,`cus_password`) 
         VALUES({$cus_id},'{$cus_fname}','{$cus_lname}','{$cus_city}',{$cus_postal_code},{$cus_phone_no},'{$cus_email}','{$cus_password}')";


         
        
        if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
              header("location:login.php");
        } else {
               echo "Error: " ;
          }
        

       $_POST['name1']="";
       $_POST['name2']="";
       $_POST['city']="";
       $_POST['postal']="";
       $_POST['phnumber']="";
       $_POST['mail']="";
       $_POST['pass']="";

        }

          ?>

          
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="rstyle.css">

</head>

<body>



<div class="hero-image"></div>
  <div class="registerbox">
    <img src="logo.jpg" class="logo1">

      
      
      <h2>Create your Go Green acoount</h2>

     
      <form method="POST" action="register.php">


      <p>FIRST NAME</p>
        <input type="text" name="name1" id="name1" placeholder="Enter Your First Name" required>

        <p>LAST NAME</p>
        <input type="text" name="name2" id="name2" placeholder="Enter Your Last Name" required>

        <p>CITY</p>
        <input type="text" name="city" id="city" placeholder="Enter Your City" required>

        <p>POSTAL CODE</p>
        <input type="text" name="postal" id="postal" placeholder="Enter Your Postal Code" required>

        <p>CONTACT NUMBER</p>
        <input type="text" name="phnumber" id="phnumber" placeholder="Enter Your Contact Number" required>

        <p>EMAIL</p>
        <input type="text" name="mail" id="mail" placeholder="Enter Your Email" required>


        <p>PASSWORD</p>
        <input type="password" name="pass" id="pass" placeholder="Create Your Password" required>

        <input type="submit" name="create" id="create" value="Create an account">

        </form>

</div>





</body>
</html>



