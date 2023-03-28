<?php

$link = mysqli_connect("localhost","root","","register");

if($link === false){
    die("Error uh");
}

$firstname =  mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname =  mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email =  mysqli_real_escape_string($link, $_REQUEST['email']);
$passwords =  mysqli_real_escape_string($link, $_REQUEST['password']);
$mobile =  mysqli_real_escape_string($link, $_REQUEST['mobile']);

$query = "INSERT INTO register VALUE ('$firstname','$lastname','$email','$passwords','$mobile')";

if(mysqli_query($link, $query)){
    header("Location: http://localhost/project/login.html");
    exit();
}
else{
    header("Location: register.html");
}

mysqli_close($link);

?>
