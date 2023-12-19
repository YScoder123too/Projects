<?php
$insert=false;
if(isset($_POST["username"])){ 

$server="localhost";
$username="root";
$password="";


$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to this database has failed due to".mysqli_connect_error());
}

$username=$_POST["username"];
$password=$_POST["password"];

$sql=  "INSERT INTO `web_first_project`.`login_info` (`username`, `password`) VALUES ('$username', '$password')";

if($con->query($sql)==true){
    $insert=true;
}

else{
    echo "ERROR:$sql<br> $con->error";
}

//close the database
$con->close();

}

?>


























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="log.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
        <form action="">
    <h1>Login</h1>
    <div class="input-box">
        <input type="text" placeholder="Username" required>

        <i class='bx bxs-user'></i>

    </div>
    <div class="input-box">
        <input type="password" placeholder="Password" required>

        <i class='bx bxs-lock-alt'></i>

    </div>
<div class="remember-forget">
    <label><input type="checkbox">Remember me</label>
    <a href="#">Forget password?</a>
</div>

    <button type="submit" class="btn"><a href="dashboard.php">Login</a></button>

    <div class="register-link">
        <p>Don't have an account?
        <a href="register.php">Register</a>
</p>



    </div>


        </form>
</body>
</html>