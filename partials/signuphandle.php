<?php

$showError = 'false';

include 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = $_POST['signupemail'];
$password = $_POST['signuppassword'];
$cpassword = $_POST['signconfirmpassword'];

$existsql = "SELECT * FROM `users` WHERE user_email = '$email'";
$result = mysqli_query($conn,$existsql);
$numrows = mysqli_num_rows($result);
if ($numrows>0) {
$showError = 'Email already exist';
header('location: /onlineforumproject/index.php?error='.$showError.'');


    
}else {
    if ($password == $cpassword) {
        $sql = "INSERT INTO `forum`.`users` ( `user_email`, `user_password`, `timestamp`) VALUES ( '$email', '$password', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location: /onlineforumproject/index.php?signupsuccess=true');
        }
    }else {
        $showError = 'password do not match';
        header('location: /onlineforumproject/index.php?error='.$showError.'');
    }
}






}



?>



