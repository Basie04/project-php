<?php
require 'database.php';

$stmt = $conn->prepare("SELECT *, manufacturers.name as fabrikant FROM products
JOIN manufacturers ON manufacturers.id = products.manufacturer");
$stmt->execute();

// set the resulting array to associative
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);




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
    <table>
        <thead>
            <th>id</th>
            <th>naam</th>
            <th>prijs</th>
            <th>fabrikant</th>
        </thead>

        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['manufacturer']; ?></td>
                    <td><?php echo $product['fabrikant']; ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>