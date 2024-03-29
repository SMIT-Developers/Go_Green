
<!doctype html>

<html lang="en">
<head>
    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../resources/css/admin/header.css" type="text/css">

</head>

<body >
<div class=" container ">

            <div class="row">
                <div class="col-lg-12 bg-primary mt-lg-4 justify-content-between d-flex" id="footer">

                    <h6 class="text-light">
                      <?php

                      echo date("y/m/d")."   ";
                      echo "    ". date("h:i:sa");
                      ?>
                    </h6>

                    <span class="text-white text-capitalize ">
                        <?php

                        if(isset($_SESSION['id']) & ($_SESSION['user']='admin' || $_SESSION['user']='mod'))
                            echo $_SESSION['username'];
                        ?>

                    </span>


                    <h6 class="text-light">
                        @Copyright
                    </h6>

                </div>
            </div>

</div>
</body>
</html>

