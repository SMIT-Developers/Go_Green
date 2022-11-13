<?php

require_once 'php/Functions/Common_function.php';
require_once 'php/Includes/Config.php';

require_once 'php/Functions/Admin_functions.php';


//connection object
$newConnection=new Config();

//create connection
$conn=$newConnection -> createConnection();


//start session
session_start();


$errors=[];

//check whether user log in or not
if(isset($_SESSION['admin_type'])) {
    header('location:php/Pages/admin-dashboard.php');
    exit();
}

//form sumbsiion login
if(isset($_POST['submit'])){

    $errors=[];
    //check set username and password
    if(!isset($_POST['username']) & strlen(trim($_POST['username'])) <1  ) {

        $errors[] = "Username is Missing /Invalid";
    }

    if(!isset($_POST['password']) & strlen(trim($_POST['password'])) <1 ){

        $errors[] = "Password is Missing /Invalid";
    }

    if(empty($errors)){

        //sanitize inputs
        $username=inputSanitizer($_POST['username']);

        $password=inputSanitizer($_POST['password']);


        if(vertifyLogin($username, $password,$conn)){

//            $message= "details are correct";

            sleep(5);
            header('location:php/Pages/admin-dashboard.php');

            exit();
        }else{
            $errors[] ="username or password incorrect";

        }

        $_POST['username']='';
        $_POST['password']='';
    }

}


?>


<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Login | Admin </title>

    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../resources/css/admin/logIn.css" type="text/css">
    <style>
        html,body{
            height: 100%;
        }
    </style>

</head>

<body >

    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center"  >

            <div class="col-lg-5">
                    <div class="card border-white shadow-lg text-center ">

                        <div class="card-header" id="loginHeader">

                            <h3 class="m-0 text-dark">
                                <i class="fas fa-user-shield"></i>
                                &nbsp; Admin Login

                            </h3>

                        </div>

                        <div class="card-body" id="loginBody">

                            <div id='adminLoginAlert'>

                                <?php
                                if (isset($errors) && !empty($errors)) {

                                    foreach ($errors as $error){
                                        echo "<pre class='text-capitalize'>".$error."</pre>";
                                    }

                                }
                                ?>

                            </div>
                            <form action='index.php' method='post' class='px-3' id='admin-login-form' >
                                
                                <div class='form-group loginInputs'>
                                    <!--        <label for='username'>Username</label> -->
                                    <input type='text' name='username' class='form-control form-control-lg rounded-0' id='username' placeholder='Username' required autofocus value=''>

                                </div>

                                <div class='form-group loginInputs'>
                               <!--     <label for='password'>Password</label> -->
                                    <input type='password' name='password' class='form-control form-control-lg rounded-0' id='password' placeholder='Password' required value=''>

                                </div>

                                <div class='form-group text-white' id='loginButton'>
                                    <input type='submit' name='submit' class='btn btn-block btn-lg rounded-0 text-white'  value='Login' id='adminLoginBtn'  >

                                </div>

                            </form>


                        </div>
                    </div>
                </div>
        </div>

</body>
</html>