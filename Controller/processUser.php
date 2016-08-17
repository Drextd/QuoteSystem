<?php

session_start();

include '../Model/dbConnect.php';

$username = $_POST['home_username'];
$password = $_POST['home_password'];

$_SESSION['error_code'] = "Incorrect Login";

if(isset($_POST['home_login_submit'])) {
    $adminUsername_check_sql = "SELECT * FROM admin WHERE adminUsername = '" . $username . "' AND adminPass = '" . $password . "'";
    $check_adminUser = $conn->prepare($adminUsername_check_sql);
    $check_adminUser->execute();
    $result_admin = $check_adminUser->fetchColumn();

    if(!empty($result_admin)) {
        $_SESSION['userid'] = $result_admin['adminID'];
        $_SESSION['usertype'] = 'admin';
        unset($_SESSION['error_code']);
        echo "Admin Login Successful";
    }

    $customerUsername_check_sql = "SELECT * FROM customer WHERE customerUsername = '" . $username . "' AND customerPass = '" . $password . "'";
    $check_customerUser = $conn->prepare($customerUsername_check_sql);
    $check_customerUser->execute();
    $result_customer = $check_customerUser->fetchColumn();

    if(!empty($result_customer)) {
        $_SESSION['userid'] = $result_customer['customerID'];
        $_SESSION['usertype'] = 'customer';
        unset($_SESSION['error_code']);
        echo "Customer Login Successful";
    }
}

echo '<div class="debug">DEBUG:POST:';
echo var_dump($result_admin);
echo var_dump($result_customer);
echo var_dump($_SESSION);
echo '</div>';