<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con=mysqli_connect($server,$username,$password);

    if (!$con) {
    die("connection to database failed due to " . mysqli_connect_error())
    }

?>