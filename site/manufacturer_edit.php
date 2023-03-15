<?php

session_start();
require 'database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM manufacturers WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

// set the resulting array to associative
$fabrikant = $stmt->fetch(PDO::FETCH_ASSOC);




if (!is_array($fabrikant)) {
    echo "er is iets fout gegaan";
    die();
}




if (isset($_POST['submit']) && !empty($_POST['naamFabrikant']) && !is_null($_POST['naamFabrikant']) && strlen($_POST['naamFabrikant']) >= 3) {
    
    $stmt = $conn->prepare("UPDATE manufacturers SET name = :name WHERE id = :id)
    VALUES (:name)");

    $stmt->bindParam(':name', $_POST['naamFabrikant']);

    $stmt->bindParam(':id', $_GET['id']);
    
    
    echo "dit is goed";
} else {
    echo "dit is niet goed";
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Naam Fabrikant</label>
        <input type="text" name="naamFabrikant" id="naamFabrikant" value="<?php echo $fabrikant['name']; ?>">
        <input type="submit" name="submit" value="update">
    </form>
</body>

</html>

