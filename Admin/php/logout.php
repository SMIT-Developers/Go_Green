<?php

//log out page

session_start();

//remove session and redirect to log In
unset($_SESSION['admin_type']);
header('location:../../admin/index.php');