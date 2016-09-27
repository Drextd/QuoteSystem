<?php

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

