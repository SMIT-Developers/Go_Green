<?php

//class use to create some functions

class Functions


{

    private mysqli $conn;

    public function createConnection()
    {

        // Create connection
        try {
            $servername = 'localhost';
            $username = 'root';
            $password = 'admin123';
            $this->conn = new mysqli($servername, $username, $password);
            echo "databse connected succesfully";
        } catch (Exception $exception) {
            echo 'Error: ' . $exception->getMessage();
            echo "databse not connected succesfully";

        } finally {

            return $this->conn;

        }
    }


    public function inputSanitizer($data){

        $data =trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;

    }


    //show error or success messages
    public function showMessage($type, $message){

        return '<div class="alert alert-'.$type.' alert-dismissible">
                    <button type="button" class="close" data-dismiss = "alert">&times;</button>
                    <strong class="text-center">'.$message.'</strong>>
                </div>'
            ;
    }


    //get time a go
    public function timeInAgo($timestamp)
    {

        date_default_timezone_set('Asia/Colombo');

        $timestamp = strtotime($timestamp) ? strtotime($timestamp) : $timestamp;

        $time = time() - $timestamp;

        define("SIXTY", 60);
        switch ($time) {
            //seocnds

            case $time <= SIXTY:
                return 'Just Now';

            //Minutes
            case ($time >= SIXTY && $time < SIXTY * SIXTY) :
                return (round($time / SIXTY) == 1) ? 'a minute ago ' : round($time / SIXTY) . ' minute ago';

            //Hours
            case ($time >= (SIXTY * SIXTY) && $time < (SIXTY * SIXTY * 24)):
                return (round($time / (SIXTY * SIXTY) == 1)) ? 'an hour ago ' : round($time / (SIXTY * SIXTY)) . ' hour ago';

            //Days
            case ($time >= (SIXTY * SIXTY * 24) && $time < (SIXTY * SIXTY * 24 * 7)):
                return (round($time / (SIXTY * SIXTY * 24) == 1)) ? 'a day ago ' : round($time / (SIXTY * SIXTY * 24)) . ' day ago';

            //weeks
            case ($time >= (SIXTY * SIXTY * 24 * 7) && $time < (SIXTY * SIXTY * 24 * 7 * 4.3)):
                return (round($time / (SIXTY * SIXTY * 24 * 7) == 1)) ? 'a week ago ' : round($time / (SIXTY * SIXTY * 24 * 7)) . ' week ago';

            //months
            case ($time >= (SIXTY * SIXTY * 24 * 7* 4.3) && $time < (SIXTY * SIXTY * 24 * 7 * 4.3* 12)):
                return (round($time / (SIXTY * SIXTY * 24 * 7*4.3) == 1)) ? 'a month ago ' : round($time / (SIXTY * SIXTY * 24 * 7*4.3)) . ' month ago';

            //months
            case ($time >= (SIXTY * SIXTY * 24 * 7* 4.3*12) ):
                return (round($time / (SIXTY * SIXTY * 24 * 7*4.3*12 ) == 1)) ? 'a year ago ' : round($time / (SIXTY * SIXTY * 24 * 7*4.3*12)) . ' year ago';
        }

    }

}