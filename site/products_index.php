<?php
require 'database.php';
session_start();

$stmt = $conn->prepare("SELECT products.id AS id, products.name AS name, products.price AS price, products.manufacturer AS manufacturer , manufacturers.manu_name as fabrikant FROM products
JOIN manufacturers ON manufacturers.id = products.manufacturer ORDER BY products.id");
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
    <?php if(isset($_SESSION["user_data"]) && !empty($_SESSION["user_data"])){?>    
            <a href="logout.php">logout</a>
        <?php }else{ ?>
            <a href="login.php">login</a>
        <?php } ?>
        
    <table border="2">
        <thead>
            <th>id</th>
            <th>naam</th>
            <th>prijs</th>
            <th>fabrikant</th>
            <th>fabrikant naam</th>
        </thead>

        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['manufacturer']; ?></td>
                    <td><?php echo $product['fabrikant']; ?></td>

                    <?php
                    if(isset($_SESSION['user_data']) && isset($_SESSION['user_data']['rol'])){
                        if($_SESSION['user_data']['rol'] == "admin" && $_SESSION['user_data']['rol'] != "user"){ ?>
                            <td><a href="products_edit.php?id=<?php echo $product['id']; ?>">edit</a></td>

                    <?php }} ?>
                    
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>