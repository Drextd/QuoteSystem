<?php

$uri  = "mysql:dbname=quotesystem;host:127.0.0.1";
$user = "root";
$pass = "";

$conn = new PDO($uri, $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>