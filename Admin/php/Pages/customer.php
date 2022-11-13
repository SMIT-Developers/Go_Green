<!-- Register User Page-->
<?php

//add header and modal
require_once '../Includes/Admin-header.php';
require_once '../Functions/Users_function.php';


require_once '../Includes/Config.php';



//connection object
$newConnection=new Config();
//create connection
$conn=$newConnection ->createConnection();


$tableData = viewAllCustomer($conn);

?>

<html>

<head>

    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customers | Dashboard </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../../resources/css/admin/main.css" type="text/css">
    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">

</head>

<body>

<div class="row">
    <div class="col-lg-12">

        <div class="card my-2 border-success">

            <div class="card-header bg-success text-white">


                <div class="col-lg-12">
                    <h4>Customers</h4>
                </div>
            </div>


            <div class="card-body">
                <div class="search-container">
                    <form action="customer.php" id="searchResearcher" method="get">
                        <div class="input-group rounded">

                            <input type="search" class="form-control rounded" placeholder="Enter First Name, Last Name, Email or Id" aria-label="Search"
                                   aria-describedby="search-addon" id="searchCustomer" name="searchCustomer"/>
                            <button class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="table-responsive" id="showAllUsers">

                    <table class="table">
                        <table class="table table-striped" id="dataTable"">
                        <thead class="fw-normal">
                        <tr >

                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>

                            <th>Status</th>

                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                       echo $tableData;

                         ?>
                        </tbody>
                    </table>


                </div>
            </div>

            <div class="card-footer">
                <!-- Center-aligned -->
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
