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

    <link rel="stylesheet" href="" type="text/css">

</head>
<body>
<div class="container w-100 p-3 h-25 ">
    <div class="row h-150 align-items-center justify-content-center"  >

        <div class="col-6 bg-dark text-white">

                <div class="card bg-dark text-center">

                        <div class="card-header ">
                            <h1>My New Admin</h1>
                        </div>

                    <div class="card-body   mt-2 mb-2 text-center font-weight-bold">


                        <form  class="was-validated" method="post">

                            <div class="form-group">
                                <label for="fName">First Name:</label>
                                <input type="text" class="form-control" id="fName" placeholder="Enter First name" name="fName" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>

                                <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"  >Add</button>
                                <a type="button"href="../Pages/admin-dashboard.php" class="btn btn-danger" >Back</a>


                            </div>

                        </form>

                    </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>