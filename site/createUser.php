<?php
require "database.php";
print_r($_POST);

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, ip_address)
VALUES (:first_name, :last_name, :email, :password, :ip_address)");
$stmt->bindParam(':first_name', $first_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':ip_address', $ip_address);

// insert a row
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$ip_address = $_POST["ip_address"];
$stmt->execute();


echo "New records created successfully";
