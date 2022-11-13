<?php

//input sanitizer
function inputSanitizer($data){

    $data =trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;

}
//pw encrypt

//pw decrypt

