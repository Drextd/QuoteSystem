<?php


$dateCreated = date('Y/m/d');

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
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $result;
}

function getCustomerDetails($customerUsernameLoggedIn){

    global $conn;
    $sql = "SELECT * FROM customer WHERE customerUsername = :customerUsername";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':customerUsername', $customerUsernameLoggedIn);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $result;
}

function createQuote($customerID){

    global $conn;
    $quoteSql = "INSERT INTO quotedatabase (customerID, dateCreated) VALUES (:customerID, NOW())";
    $statement = $conn->prepare($quoteSql);
    $statement->bindValue(':customerID', $customerID);
    $statement->execute();
    $createQuote = $statement;
    $statement->closeCursor();
    return $createQuote;
}

function addQuote($jobCategory, $serviceType, $serviceTime, $servicePrice){

    global $conn;

    $quoteIDSql = "SELECT quoteID FROM quoutedatabase";
    $statement = $conn->prepare($quoteIDSql);
    $statement->execute();
    $lastInserted = $conn->lastInsertId();

    $sql = "INSERT INTO quote_service (quoteID, categoryID, serviceType, serviceTime, servicePrice) VALUES (" . $lastInserted . ", :jobCategory, :serviceType, :serviceTime, :servicePrice)";
    $statementOne = $conn->prepare($sql);
    $statementOne->bindValue(':jobCategory', $jobCategory);
    $statementOne->bindValue(':serviceType', $serviceType);
    $statementOne->bindValue(':serviceTime', $serviceTime);
    $statementOne->bindValue(':servicePrice', $servicePrice);
    $addQuoteResult = $statementOne->execute();
    $statementOne->closeCursor();
    return $addQuoteResult;
}

/* Admin functions */

function searchQuote($searchQuote){

    global $conn;
    $sql = "SELECT quoteID, customerID FROM quotedatabase  WHERE quoteID = :searchQuote";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':searchQuote', $searchQuote);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $result;
}

function viewQuote($viewQuote){

    global $conn;
    $sql = "SELECT A.quoteID, C.customerID, B.jobCategory, A.serviceType, A.serviceTime, A.servicePrice FROM quote_service AS A, service_category AS B, quotedatabase AS C, customer AS D WHERE A.categoryID=B.categoryID AND C.customerID=D.customerID AND A.quoteID = C.quoteID";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':viewQuote', $viewQuote);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $result;
}

function addService($categoryID, $serviceType, $serviceTime, $servicePrice){

    global $conn;
    $sql = "INSERT INTO services (categoryID, serviceType, serviceTime, servicePrice) VALUES (:categoryID, :serviceType, :serviceTime, :servicePrice)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':categoryID', $categoryID);
    $statement->bindValue(':serviceType', $serviceType);
    $statement->bindValue(':serviceTime', $serviceTime);
    $statement->bindValue(':servicePrice', $servicePrice);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;
}

function searchService($searchService){

    global $conn;
    $sql = "SELECT serviceID, jobCategory, serviceType, serviceTime, servicePrice FROM services as A JOIN service_category as B ON A.categoryID=B.categoryID WHERE serviceID = :serviceID";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':serviceID', $searchService);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
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

/* Quote functions */

function getJobCategoryDropDown(){

    global $conn;
    $sql = 'SELECT * FROM service_category ORDER BY jobCategory';
    $statement = $conn->prepare($sql);
    $statement->execute();
    $jobCatDropDown = $statement->fetchAll();
    $statement->closeCursor();
    return $jobCatDropDown;
}

function getServiceTypeDropDown(){

    global $conn;
    $sql = 'SELECT categoryID, serviceType FROM services';
    $statement = $conn->prepare($sql);
    $statement->execute();
    $serviceTypeDropDown = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $serviceTypeDropDown;
}

function populateQuote(){

    global $conn;
    $sql = 'SELECT serviceType, serviceTime, servicePrice FROM services';
    $statement = $conn->prepare($sql);
    $statement->execute();
    $populateQuote = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $populateQuote;
}




  