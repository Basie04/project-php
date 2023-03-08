<?php
require 'database.php';
try {
    $stmt = $conn->prepare("SELECT * FROM manufacturers");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all_manufacturer = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
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
    <table border="2">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>edit</th>
        </thead>
        <tbody>
            <?php foreach ($all_manufacturer as $manufacturer) { ?>
                <tr>
                    <td><?php echo $manufacturer['id']  ?></td>
                    <td><?php echo $manufacturer['name']  ?></td>
                    <td><a href="manufacturer_edit.php?id=<?php echo $manufacturer['id'] ?>">edit</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>