<?php

include '../Model/dbConnect.php';

$username = $_POST['home_username'];
$password = $_POST['home_password'];

$adminUsername_check_sql = "SELECT * FROM admin_table WHERE adminUsername = '" . $_POST['home_username'];
$adminPass_check_sql = "SELECT * FROM admin_table WHERE adminPass = '" . $_POST['home_password'];

if(isset($_POST['home_login_submit'])){
    if(($username == $adminUsername_check_sql) && ($password == $adminPass_check_sql)){
        $_SESSION['loggedIn'] = true;
        echo "Successful Admin Login";
    } else {
        $_SESSION['loggedIn'] = false;
        echo "Incorrect login details";
    }
}

echo '<div class="debug">DEBUG:POST:';
echo var_dump($_POST);
echo '</div>';