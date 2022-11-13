
<?php

session_start();

//check user log or not
if(!isset($_SESSION['admin_type'])){

    header('location:../../index.php');
    exit();
}

?>

<!doctype html>

<html lang="en">
<head>
    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../resources/css/admin/main.css" type="text/css">
    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">
    <script src="../../../resources/js/admin/header.js" type="application/javascript">

    </script>
    <style type="text/css" >

        .background{
            background-color:gray;
        }


    </style>

</head>

<body >

<div class=" container-fluid ">
    <div class="row ">
        <div class="admin-nav p-0 text-dark">

            <h4 class="text-white text-center p-2">  Menu </h4>

            <div class="list-group list-group-flush text-dark " id="listGroup">


                <!-- have to look on active     -->

                <a class="list-group-item text-dark text-center bg-white " href='../Pages/admin-dashboard.php' id="nav-home"  >
                        <i class="fas fa-home fa-2x"></i>
                </a>


                <!-- // users -->

                <a  class="list-group-item list-group-flush admin-main-link text-center text-white " id="nav-users" >
                    <i class="fas fa-user-friends"></i>&nbsp;
                    &nbsp; Users
                </a>


                <!-- //user group -->
                <div class="list-group list-group-flush user-group text-left text-white " id="nav-user-list" >

                    <a href='../Pages/admin.php' class="list-group-item  sub-link">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        &nbsp; Administrators
                    </a>

                    <a href='../Pages/researcher.php' class="list-group-item  sub-link">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Researchers
                    </a>
                    <a href='../Pages/customer.php' class="list-group-item  sub-link">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Customers
                    </a>

                </div>


                <!-- //Resourses -->
                <a  class="list-group-item text-light admin-main-link text-center " id="nav-resources">
                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                    &nbsp; Resourses
                </a>

                <!-- //Resourses group -->
                <div class="list-group list-group-flush resources-group text-left text-white " id="nav-resources-list" >

                    <a href='../Pages/learningArea.php'  class="list-group-item  sub-link">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        &nbsp; Learning Area
                    </a>

                    <a href='../Pages/enterainmentArea.php'class="list-group-item  sub-link">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Entertainment Area
                    </a>


                </div>


                <!--  //Stock -->

                <a class="list-group-item text-light admin-main-link text-center" id="nav-stock"  >
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    &nbsp; Stock
                </a>

                <!--   //Stock group -->

                <div class="list-group list-group-flush stock-group text-left text-white " id="nav-stock-list">
                    <a href='../Pages/products.php' class="list-group-item text-light sub-link">
                        <i class="fa fa-rss-square" aria-hidden="true"></i>
                        &nbsp; Products
                    </a>

                    <a href='../Pages/transaction.php' class="list-group-item  sub-link">
                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        &nbsp;&nbsp; Orders & Payments
                    </a>



                </div>

                <!--    //Feedbacks -->
                <a  class="list-group-item text-light admin-main-link text-center" id="nav-feedback" >
                <i class="fad fa-book"></i>
                    &nbsp; Feedback
                </a>


                <!--      //Feedback group -->

                <div class="list-group list-group-flush feedback-group text-left text-white " id="nav-feedback-list">
                    <a href='../Pages/customerFeedback.php' class="list-group-item  sub-link">
                        <i class="fas fa-money-bill"></i>

                        &nbsp; Customers
                    </a>

                    <a href='../Pages/researcherFeedback.php' class="list-group-item  sub-link">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        &nbsp;Researchers
                    </a>

                </div>

            </div>


        </div>

        <!--  top header -->

        <div class="col bg-success">
            <div class="row">

                <div class="col-lg-12  text-light pt-lg-5 justify-content-between d-flex" id="header-top">

                    <ul class="list-inline" >
                        <li class="list-inline-item " id="open-nav" >
                            <a >  <i class="fas fa-ellipsis-v fa-2x"></i></a>
                        </li>
            &nbsp;
                        <li class="list-inline-item " >
                            <a
                                    type="submit"
                                    class="btn  mb-2  myAccount"
                                    href="../subPages/view_account.php?userId="
                                    id="myAccount"

                                    >
                                <i class="far fa-user fa-2x text-dark "></i>
                            </a>

                        </li>


                    </ul>

                    <h3 class="fw-bold">
                      Dashboard
                    </h3>

                    <h6>

                        &nbsp;&nbsp

                    <a href="../logout.php" class="mt-1 text-light flex-lg-wrap text-secondary">
                        <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                    </a>
                    </h6>
                </div>
            </div>





