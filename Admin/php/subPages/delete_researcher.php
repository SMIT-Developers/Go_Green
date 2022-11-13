<?php


require_once '../Includes/Admin-header.php';
?>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../../resources/css/admin/main.css" type="text/css">
    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">

</head>
<body>
<div class="container w-100 p-5 h-75 ">
    <div class="row h-150 align-items-center justify-content-center"  >

        <div class="col-6 bg-success  ">
            <div class="card-deck mt-2 mb-2 text-center font-weight-bold  ">
                <div class="card ">

                    <div class="card-header text-white bg-dark">
                        <h1>DELETE Researcher</h1>
                    </div>

                    <div class="card-body bg-danger text-dark">


                        <form action="delete_researcher.php" class="was-validated">

                            <div class="form-group">
                                <div class="alert alert-danger display-6" role="alert">
                                    Do you want to delete this Researcher
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-dark text-white">Delete</button>
                                <a type="button" class="btn btn-dark text-white"  href="../Pages/researcher.php">Close</a>
                            </div>



                        </form>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>