<?php

$username = $_POST["username"];
$password = $_POST["password"];


include("conexion.php");
$con = connection();

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);


$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$query = mysqli_query($con, $sql);


if (mysqli_num_rows($query) == 1) {

    header("Location: ../main/main.html");
} else {
  
    echo "Username or password are incorrect.";
}


mysqli_close($con);

?>
