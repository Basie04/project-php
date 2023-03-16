<?php
require 'database.php';
session_start();
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
<?php if(isset($_SESSION["user_data"]) && !empty($_SESSION["user_data"])){?>    
            <a href="logout.php?from=manufacturers">logout</a>
        <?php }else{ ?>
            <a href="login.php?from=manufacturers">login</a>
        <?php } ?>
    <table border="2">
        <thead>
            <th>id</th>
            <th>name</th>
        </thead>
        <tbody>
            <?php foreach ($all_manufacturer as $manufacturer) { ?>
                <tr>
                    <td><?php echo $manufacturer['id']  ?></td>
                    <td><?php echo $manufacturer['manu_name']  ?></td>

                    <?php
                    if(isset($_SESSION['user_data']) && isset($_SESSION['user_data']['rol'])){
                        if($_SESSION['user_data']['rol'] == "admin" && $_SESSION['user_data']['rol'] != "user"){ ?>
                            <td><a href="manufacturer_edit.php?id=<?php echo $manufacturer['id'] ?>">edit</a></td>

                    <?php }} ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>