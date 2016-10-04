<?php

session_start();

require ('../Model/dbConnect.php');
require('../Model/database_functions.php');
include ('../View/header.php');

$jobCategory = $_POST['jobCategory'];
$jobType = $_POST['jobType'];
$jobTime = $_POST['jobTime'];
$jobPrice = $_POST['jobPrice'];

$result =  addService($jobCategory, $jobType, $jobTime, $jobPrice);

if($result){

    echo '<div class="loading_style">Service has been successfully Added.</div>';

    echo '<script type="text/javascript">serviceLoad()</script>';

}

?>
