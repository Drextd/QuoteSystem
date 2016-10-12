<?php

session_start();

include '../Model/dbConnect.php';
include '../Model/database_functions.php';
include '../View/header.php';

$username = $_POST['home_username'];
$password = $_POST['home_password'];

if(isset($_POST['home_login_submit'])) {

    $result_admin = adminCheck($username, $password);
    
    if(!empty($result_admin)) {
        $_SESSION['userID'] = $result_admin;
        $_SESSION['username'] = $username;
        echo '<div class="loading_style">Admin Login Successful</div>';
        echo '<script type="text/javascript">openDelayAdmin()</script>';
    }

    $result_customer = customerCheck($username, $password);

    if(!empty($result_customer)) {
        $_SESSION['userID'] = $result_customer;
        $_SESSION['username'] = $username;
        echo '<div class="loading_style">Customer Login Successful</div>';
        echo '<script type="text/javascript">openDelayCustomer()</script>';
    }

    if(empty($result_admin) && empty($result_customer)) {
        echo "Incorrect Login";
    }
}
