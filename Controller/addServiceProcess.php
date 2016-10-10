<?php

session_start();

require ('../Model/dbConnect.php');
require('../Model/database_functions.php');
include ('../View/header.php');

$categoryID = $_POST['jobCategory'];
$serviceType = $_POST['serviceType'];
$serviceTime = $_POST['serviceTime'];
$servicePrice = $_POST['servicePrice'];

$result =  addService($categoryID, $serviceType, $serviceTime, $servicePrice);

if($result){

    echo '<div class="loading_style">Service has been successfully Added.</div>';

    echo '<script type="text/javascript">serviceLoad()</script>';

}

?>
