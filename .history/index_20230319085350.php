<?php 
if(isset($_POST['name'])){
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
    $desc=$_POST['desc'];
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if ($con->query($sql)==true) {
        // echo "successfully submitted";
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel to new places</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    body {
        background-image: url("https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80");
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>Welcome to Round the World Trip Travel Form</h3>
        <p>
            Enter your details to confirm your participation in the trip. Click
            submit after you are finished
        </p>

        <p class="submitMsg">Thanks for submitting the form</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name" />

            <input type="text" name="age" id="age" placeholder="enter your age" />

            <input type="text" name="gender" id="gender" placeholder="enter your gender" />

            <input type="email" name="email" id="email" placeholder="enter your email" />

            <input type="phone" name="phone" id="phone" placeholder="enter your phone" />

            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other miscellaneous information"></textarea>
            <button class="btn">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
<?php 
if(isset($_POST['name'])){
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
    $desc=$_POST['desc'];
    $sql="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES  '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if ($con->query($sql)==true) {
        echo "succesfully submitted";
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel to new places</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    body {
        background-image: url("https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80");
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>Welcome to Round the World Trip Travel Form</h3>
        <p>
            Enter your details to confirm your participation in the trip. Click
            submit after you are finished
        </p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name" />

            <input type="text" name="age" id="age" placeholder="enter your age" />

            <input type="text" name="gender" id="gender" placeholder="enter your gender" />

            <input type="email" name="email" id="email" placeholder="enter your email" />

            <input type="phone" name="phone" id="phone" placeholder="enter your phone" />

            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other miscallaneous information"></textarea>
            <button class="btn">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
<!--  -->