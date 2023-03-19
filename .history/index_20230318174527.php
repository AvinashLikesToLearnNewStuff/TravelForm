<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con=mysqli_connect($server,$username,$password);

    if (!$con) {
    die("connection to database failed due to " . mysqli_connect_error());
    }
    // echo "success connecting to the db"; 

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $other=$_POST['other'];
    $sql="INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES  '$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

?>