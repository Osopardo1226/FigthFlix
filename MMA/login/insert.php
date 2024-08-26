<?php
include("conexion.php");


$con = connection();


$email_user = $_POST['email'];
$username_user = $_POST['username'];
$password_user = $_POST['password'];


$sql = "INSERT INTO users (email, username, password) VALUES ('$email_user', '$username_user', '$password_user')";


$query = mysqli_query($con, $sql);

if($query){

    header("Location: indexlogin.html");
} else {

    echo "Error: " . mysqli_error($con);
}


mysqli_close($con);
?>
