<?php

require_once '../Includes/Admin-header.php';
require_once '../Functions/Stock_functions.php';


require_once '../Includes/Config.php';



//connection object
$newConnection=new Config();
//create connection
$conn=$newConnection ->createConnection();


$tableData = viewAllOrders($conn);
?>

<html>
<head>

    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Orders | Admin </title>
    <link rel="stylesheet" href="../../../resources/css/admin/main.css" type="text/css">
    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">


</head>

<body>
<div class="row">
    <div class="col-lg-12">

        <div class="card my-2 border-success">

            <div class="card-header bg-success text-white">


                <div class="col-lg-12">
                    <h4>Orders
                    </h4>

                </div>
            </div>

            <div class="card-body">
                <div class="search-container">
                    <form action="admin.php" id="searchMod" method="get">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Enter Brand Name or Id" aria-label="Search"
                                   aria-describedby="search-addon" id="searchBrand" name="searchBrand"/>
                            <button class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>


                <div class="table-responsive" id="showAllUsers">

                    <table class="table table-striped" id="dataTable">

                        <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>OrderDate</th>
                            <th>Order Weight</th>
                            <th>View</th>
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


<!--      footer area         -->

</body>
</html>