<?php
require 'database.php';
if(isset($_GET['id'])){

    $table_name = $_GET['tab'];


    $stmt = $conn->prepare("DELETE FROM $table_name WHERE id = :id");

    $stmt->bindParam(':id', $_GET['id']);

    $stmt->execute();

    header('Location: products_index.php');
}
?>