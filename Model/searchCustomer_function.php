<?php

include ('../Model/dbConnect.php');

$searchCustomerResult = $_POST['searchCustomerInput'];

if(isset($_POST['searchsubmit'])){

    $sql = "SELECT * FROM customer ";

}
