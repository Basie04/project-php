<?php
require "database.php";
print_r($_POST);


if(is_null($_POST) or !empty($_POST)){
    foreach ($_POST as $item){
        if(is_null($item) or empty($item) or !is_string($item)){
            die("some fields were empty");
        }
    }
}
else{die("post was empty or not existing");}

$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$ip_address = $_POST["ip_address"];

echo "dit kan je niet zien";

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, ip_address)
VALUES (:first_name, :last_name, :email, :password, :ip_address)");
$stmt->bindParam(':first_name', $first_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':ip_address', $ip_address);

// insert a row
$stmt->execute();


echo "New records created successfully";
