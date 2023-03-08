<?php
require 'database.php';
$userid = $_GET["id"];
try {
    $stmt = $conn->prepare("UPDATE users SET ");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $u = $stmt->fetchAll();
    $user = $u[0];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>