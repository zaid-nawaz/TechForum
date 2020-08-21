<?php


session_start();

session_destroy();
header('location: /onlineforumproject/index.php');
?>