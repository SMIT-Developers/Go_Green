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
<div class="container w-100 p-3 h-25 ">
    <div class="row h-150 align-items-center justify-content-center"  >

        <div class="col-6 bg-dark  ">

                <div class="card mt-2 mb-2 text-center font-weight-bold bg-dark">

                    <div class="card-header text-white">
                        <h1>Add new gallery</h1>
                    </div>

                    <div class="card-body text-dark">


                        <form  class="was-validated">

                            <div class="form-group">
                                <label for="fName">First Name:</label>
                                <input type="text" class="form-control" id="fName" placeholder="Enter First name" name="fName">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="form-group">
                                <label for="lName">Last Name:</label>
                                <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="lName" required>
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
                                <label for="uname">Username:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
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
                                <button type="submit" class="btn btn-danger"  >Edit</button>
                                <a type="button"href="../Pages/learningArea.php" class="btn btn-dark" >Back</a>


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