<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$host = 'localhost';
$user = 'root';
$pass = '';
$dbmame = 'register';
$connection = mysqli_connect($host, $user, $pass, $dbmame);

$sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
$result = mysqli_query($connection, $sql);


if(mysqli_num_rows($result)>0){
    $_SESSION['email'] = $email;
    header("Location: http://localhost/project/profile.html");
}
else{
    header("Location: http://localhost/project/login.html");
}
mysqli_close($connection);


?>