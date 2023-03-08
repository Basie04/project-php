<?php
require 'database.php';
try {
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all_users = $stmt->fetchAll();
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
    <title>userdb</title>
</head>

<body>
    <form action="users_show.php" method="get">


        <table border="2">
            <thead>
                <th>id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
                <th>password</th>
                <th>ip_address</th>
                <th colspan="2">eddit</th>
            </thead>
            <tbody>
                <?php foreach ($all_users as $user) { ?>
                    <tr>
                        <td><?php echo $user["id"] ?></td>
                        <td><?php echo $user["first_name"] ?></td>
                        <td><?php echo $user["last_name"] ?></td>
                        <td><?php echo $user["email"] ?></td>
                        <td><?php echo $user["password"] ?></td>
                        <td><?php echo $user["ip_address"] ?></td>
                        <td><a href="<?php echo ' updateUser.php?id=' . $user['id']; ?>">Update</a></td>
                        <td><a href="<?php echo ' rmUser.php?id=' . $user["id"]; ?>">remove</a></td>


                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </form>
</body>

</html>