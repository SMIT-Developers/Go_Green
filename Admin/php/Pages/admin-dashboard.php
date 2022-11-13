<!--  this is admin dashboard  -->

<!doctype html>

<?php

//require header
require_once '../Includes/Admin-header.php';


?>


<head>

    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DashBoard</title>

    <link rel="stylesheet" href="../../../resources/css/admin/main.css" type="text/css">
    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">


</head>

<body>
<!--  dashboard content  -->

<div class="row  mt-3  ">
    <div class="col-12 bg-dark">

        <div class="card-deck">


            <div class="card text-center font-weight-bold  border border-dark ">

                <div class="card-header bg-dark text-white">
                    <h1>Users</h1>
                </div>

                <div class="card-body bg-dark text-white">

                    <table class="table table-success bg-success text-white">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col"> <h4> Administrators </h4> </th>
                            <th scope="col"> <h4> Customers </h4> </th>
                            <th scope="col"> <h4> Researchers </h4> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> <h5> 5 </h5> </td>
                            <td> <h5> 20 </h5> </td>
                            <td> <h5> 10 </h5> </td>
                        </tr>

                        </tbody>
                    </table>

                </div>


            </div>

            <div class="card text-center font-weight-bold  border border-dark ">

                <div class="card-header bg-dark text-white">
                    <h1>Income</h1>
                </div>

                <div class="card-body bg-dark text-white">

                    <table class="table table-success bg-success text-white">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col"> <h4> Total Sold KG's </h4> </th>
                            <th scope="col"> <h4> Total Earning </h4> </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> <h5> 50</h5> </td>
                            <td> <h5> 20000 </h5> </td>

                        </tr>

                        </tbody>
                    </table>

                </div>


            </div>

        </div>
    </div>
</div>


<div class="row  mt-3  ">
    <div class="col-12 bg-dark">

        <div class="card text-center font-weight-bold  border border-dark ">

            <div class="card-header bg-dark text-white">
                <h1>Stock</h1>
            </div>

            <div class="card-body bg-dark text-white">

                <table class="table table-success bg-success text-white">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col"> <h4> Item  </h4> </th>
                        <th scope="col"> <h4> Stock </h4> </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> <h5> PVC </h5> </td>
                        <td> <h5> 20 </h5> </td>
                    </tr>

                    <tr>
                        <td> <h5> Compost </h5> </td>
                        <td> <h5> 100 </h5> </td>
                    </tr>

                    <tr>
                        <td> <h5> Plastic </h5> </td>
                        <td> <h5> 200 </h5> </td>
                    </tr>

                    </tbody>
                </table>

            </div>


        </div>

    </div>
</div>


</body>


<!-- footer area -->

