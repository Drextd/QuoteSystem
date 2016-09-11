<?php

session_start();

include '../Model/dbConnect.php';
include '../View/header.php';

$username = $_POST['home_username'];
$password = $_POST['home_password'];

if(isset($_POST['home_login_submit'])) {
    $adminUsername_check_sql = "SELECT * FROM admin WHERE adminUsername = '" . $username . "' AND adminPass = '" . $password . "'";
    $check_adminUser = $conn->prepare($adminUsername_check_sql);
    $check_adminUser->execute();
    $result_admin = $check_adminUser->fetchColumn();

    if(!empty($result_admin)) {
        $_SESSION['userid'] = $result_admin;
        $_SESSION['username'] = $username;
        echo "Admin Login Successful";
        echo '<script type="text/javascript">openDelayAdmin()</script>';
    }

    $customerUsername_check_sql = "SELECT * FROM customer WHERE customerUsername = '" . $username . "' AND customerPass = '" . $password . "'";
    $check_customerUser = $conn->prepare($customerUsername_check_sql);
    $check_customerUser->execute();
    $result_customer = $check_customerUser->fetchColumn();

    if(!empty($result_customer)) {
        $_SESSION['userid'] = $result_customer;
        $_SESSION['username'] = $username;
        echo "Customer Login Successful";
        echo '<script type="text/javascript">openDelayCustomer()</script>';
    }

    if(empty($result_admin) && empty($result_customer)) {
        echo "Incorrect Login";
    }
}
