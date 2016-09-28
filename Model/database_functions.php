<?php

/* Customer functions */


function registerCustomer($username, $password, $firstname, $lastname, $email, $phone){

    global $conn;
    $sql = "INSERT INTO customer (customerUsername, customerPass, customerFirstName, customerLastName, customerEmail, customerPhone) VALUES (:customer_Username, :customer_Password, :customer_First_Name, :customer_Last_Name, :customer_Email, :customer_Phone)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':customer_Username', $username);
    $statement->bindValue(':customer_Password', $password);
    $statement->bindValue(':customer_First_Name', $firstname);
    $statement->bindValue(':customer_Last_Name', $lastname);
    $statement->bindValue(':customer_Email', $email);
    $statement->bindValue(':customer_Phone', $phone);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;
}

function updateCustomer($username, $password, $firstname, $lastname, $email, $phone){

    global $conn;
    $sql = "UPDATE customer SET customerUsername=:customerUsername, customerPass=:customerPass, customerFirstName=:customerFirstName, customerLastName=:customerLastName, customerEmail=:customerEmail, customerPhone=:customerPhone WHERE customerID=:categoryID";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':customer_Username', $username);
    $statement->bindValue(':customer_Password', $password);
    $statement->bindValue(':customer_First_Name', $firstname);
    $statement->bindValue(':customer_Last_Name', $lastname);
    $statement->bindValue(':customer_Email', $email);
    $statement->bindValue(':customer_Phone', $phone);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;
}

function searchCustomer($searchUsername){

    global $conn;
    $sql = "SELECT * FROM customer WHERE customerUsername = :customerUsername";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':customerUsername', $searchUsername);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    return $result;
}

/* Process user functions  */

function adminCheck($username, $password){
    
    global $conn;
    $adminUsername_check_sql = "SELECT * FROM admin WHERE adminUsername = '" . $username . "' AND adminPass = '" . $password . "'";
    $check_adminUser = $conn->prepare($adminUsername_check_sql);
    $check_adminUser->execute();
    $result_admin = $check_adminUser->fetchColumn();
    return $result_admin;
}

function customerCheck($username, $password){

    global $conn;
    $customerUsername_check_sql = "SELECT * FROM customer WHERE customerUsername = '" . $username . "' AND customerPass = '" . $password . "'";
    $check_customerUser = $conn->prepare($customerUsername_check_sql);
    $check_customerUser->execute();
    $result_customer = $check_customerUser->fetchColumn();
    return$result_customer;

}


  