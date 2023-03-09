<?php

    require 'database.php';

  

    $stmt = $conn->prepare("SELECT * FROM products JOIN manufacturers ON manufacturers.id = products.manufacturer WHERE products.id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $conn->prepare("SELECT * FROM manufacturers");
    $stmt->execute();
    $all_manufacturers = $stmt->fetchAll(PDO::FETCH_ASSOC);


    

    if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['manufacturer']) //als op knop is gedrukt
    && strlen($_POST['name']) >= 3){



        $stmt = $conn->prepare("UPDATE products SET name = :name, price = :price, manufacturer = :manufacturer WHERE id = :id");
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':price',$_POST['price']);
        $stmt->bindParam(':manufacturer', $_POST['manufacturer']);
        $stmt->execute();

        header('Location: products_index.php');
        die();

    }
    else{ ?>
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
                <label for="name">name</label>
                <input type="text" name="name" id="name" value="<?php echo $product['name'];?>">
                <label for="price">price</label>
                <input type="text" name="price" id="price" value="<?php echo $product['price']; ?>">
                <label for="manufacturer">manufacturer</label>

                <select name="manufacturer" id="manufacturer">manufacturer>
                <?php foreach($all_manufacturers as $manu){ ?>
                    <option value="<?php echo $manu['id'] ?>"><?php echo $manu['manu_name'] ?></option>
                <?php } ?>
                </select>

                <input type="submit" name="submit" value="submit">

            </form>
        </body>
        </html>

    <?php } ?>