<?php




$link = mysqli_connect("localhost","root","","profile");

if($link === false){
    die("Error uh");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $title =  $_POST['title'];
    $email =  $_POST['email'];
    $bio =  $_POST['bio'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];

    $sqlque = "SELECT * FROM profile LIMIT 1";
    $result = $link->query($sqlque);

    if ($result->num_rows>0) {
        $sqlque = "UPDATE profile SET fname = '$fname',lname = '$lname',title = '$title', email = '$email',bio = '$bio', username = '$username,'mobile = '$mobile'";
    }
    else{
        $sqlque = "INSERT INTO profile (fname, lname, title, email, bio, username, mobile) VALUES ('$fname', '$lname', '$title', '$email', '$bio','$username','$mobile')";
    }


}

$link->close();

?>