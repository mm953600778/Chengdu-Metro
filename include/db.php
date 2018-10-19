<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "ma-ming";
$dbpass = "48qAJHkkLZv8";
$dbname = "2201613130203";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed; " .
       mysqli_connect_error() .
       " (" . mysqli_connect_errno() . " )"
       );
}


?>