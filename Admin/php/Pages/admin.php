<?php

//add header
require_once '../Includes/Admin-header.php';
require_once '../Functions/Admin_functions.php';

require_once '../Includes/Config.php';



//connection object
$newConnection=new Config();
//create connection
$conn=$newConnection ->createConnection();


$tableData = viewAllAdmin($conn);

?>

<html>
<head>

    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administers | Dashboard </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../../resources/css/admin/main.css" type="text/css">
    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">
    <!-- group icons-->


</head>

<!-- Body -->
<body>
<div class="row">
    <div class="col-lg-12">

        <div class="card my-2 border border-white border-4">

            <div class="card-header bg-success text-white">


                    <div class="col-lg-12">
                        <h4>Administrators
                            <a
                                    type="submit"
                                    class="btn add-btn mb-2 "

                                    id="addNewAdmin"
                                    href="../subPages/add_new_administor.php"
                                  >
                                Add new Administrator
                            </a>
                        </h4>

                    </div>
            </div>


            <div class="card-body border border-white border-4">
                <div class="search-container">

                    <form action="admin.php" method="get">

                        <form class="form-group">

                            <div class="input-group mb-3 rounded ">

                                <input type="search" class="form-control rounded" placeholder="Enter Admin Fisrt Name, Last Name, Email or Id " aria-label="Search"
                                       aria-describedby="search-addon" id="searchAdmin" name="searchAdmin"/>
                                <button class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </form>


                    </form>
                </div>



                <div class="table-responsive" id="showAllUsers">

                    <table class="table" id="dataTable">

                            <thead>
                            <tr>

                                <th>Firstname</th>
                                <th>Email</th>
                                <th>Status</th>
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

