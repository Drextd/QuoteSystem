<?php

session_start();

require ('../Model/dbConnect.php');
require('../Model/database_functions.php');
include ('../View/header.php');

$searchUsername = $_POST['searchCustomerInput'];

searchCustomer($searchUsername);

?>