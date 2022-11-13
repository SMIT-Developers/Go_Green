<?php

// class user to create connection

class Config

{

    public ?mysqli $conn=null;

    public function createConnection(): mysqli
    {
        $db_servername='localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name='gogreendb';
        $conn=new mysqli($db_servername,$db_username,$db_password,$db_name);


        if($conn -> connect_error){
            echo 'Failed to connect to MySQL:';
            die($conn -> connect_error);

        }else{
           // echo "connected succesfully";
        }

        return $conn;


    }



}