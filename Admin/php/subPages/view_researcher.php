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

        <div class="col-6 bg-dark text-white ">

                <div class="card mt-2 bg-dark mb-2 text-center font-weight-bold ">

                    <div class="card-header bg-dark ">
                        <h1> View Researcher</h1>
                    </div>

                    <div class="card-body bg-success ">
                    <form action="view_researcher.php" >
                        <div class="form-group ">


                            <div class="form-group mt-auto">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" disabled>

                            </div>
                            <div class="form-group mt-auto">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" disabled>

                            </div>



                            <div class="form-group align-self-center">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="username" disabled>

                            </div>

                            <div class="form-group mt-auto">
                                <label for="uniname">University Name:</label>
                                <input type="text" class="form-control" id="uniname" disabled>

                            </div>

                            <div class="form-group mt-auto">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" disabled>

                            </div>


                            <div class=" form-group mt-2 d-flex justify-content-lg-center" >


                                <a class="btn bg-primary" href="../Pages/researcher.php" id="changeUsername">Back</a>

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