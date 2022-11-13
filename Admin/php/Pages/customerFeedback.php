<!-- Register User Page-->
<?php

//add header and modal
require_once '../Includes/Admin-header.php';
require_once '../Functions/Feedback_function.php';


require_once '../Includes/Config.php';



//connection object
$newConnection=new Config();
//create connection
$conn=$newConnection ->createConnection();


$tableData = viewAllCustomerFeedbacks($conn);

?>

<html>

<head>

    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Feedbacks | Dashboard </title>
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
                    <h4>Customer Feedbacks</h4>
                </div>
            </div>


            <div class="card-body">

                <div class="table-responsive" id="showAllUsers">

                    <table class="table">
                        <table class="table table-striped" id="dataTable"">
                        <thead class="fw-normal">
                        <tr >
                            <th>Feedback Id</th>

                            <th>Content</th>
                            <th>Customer Id</th>
                            <th>Reply</th>

                        </tr>
                        </thead>

                        <tbody>


                    <?php

                            echo $tableData;
                    ?>


                        </tbody>
                    </table>
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
