<?php

session_start();

require ('../Model/dbConnect.php');
require('../Model/database_functions.php');


getJobTypeDropDown();

if($jobTypeDropDown = getJobTypeDropDown()){

    echo json_encode($jobTypeDropDown);

}

?>