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

                <div class="card bg-dark mt-2 mb-2 text-center font-weight-bold ">

                    <div class="card-header text-white  bg-dark  mt-2 mb-2 text-center font-weight-bold">
                        <h1>Edit Gallery</h1>
                    </div>

                   <div class="card-body bg-success ">
                    <form  class="was-validated">
                        <div class="form-group ">

                            <div class="form-group mt-auto">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username">
                                <div class="mt-2 d-flex justify-content-lg-center" >

                                    <button class="btn bg-primary" type="reset" id="changeUsername">Reset</button>
                                </div>

                            </div>


                            <div class="form-group align-self-center">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="username">

                                <div class="mt-2 d-flex justify-content-lg-center" >
                                    <button class="btn bg-primary" type="reset" id="changeUsername">Reset</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password">

                                <div class="mt-2 d-flex justify-content-lg-center" >


                                    <button class="btn bg-primary" type="reset" id="changeUsername">Reset</button>

                                </div>
                            </div>


                            <div class=" form-group mt-2 d-flex justify-content-lg-center" >

                                <button class="btn bg-danger mr-3" type="submit" id="changeUsername">Change</button>
                                <a class="btn bg-primary" type="reset" id="changeUsername" href="../Pages/learningArea.php"> Close</a>

                            </div>

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