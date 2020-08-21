<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbconnect.php';
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpassword'];

    $sql = "SELECT * FROM `users` WHERE user_email = '$email' AND user_password='$pass'";
    $result = mysqli_query($conn,$sql);
    $numrows = mysqli_num_rows($result);
    if ($numrows == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['useremail'] = $email;
        $_SESSION['sno'] = $row['user_id'];
        // echo $_SESSION['sno'];
        header('location: /onlineforumproject/index.php');

    }else{
        header('location: /onlineforumproject/index.php?loginerror=true');
    }
    

}




?>