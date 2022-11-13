<?php
$host="localhost";
$user="root";
$database="gogreendb";
$password="";
$conn=mysqli_connect($host,$user,$password,$database);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    
    //echo'database connection';
    
}
?>

