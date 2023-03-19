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
    $sql="INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'dummy', '12', 'male', 'dummy@dummy.com', '1234567890', 'This is dummy text', current_timestamp());";

?>