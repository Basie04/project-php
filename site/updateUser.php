<?php
require 'database.php';
$userid = $_GET["id"];
try {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=$userid");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $u = $stmt->fetchAll();
    $user = $u[0];
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
    <form action="changeUser.php?id=" method="post">
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" value="<?php echo $user["first_name"] ?>">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname" value="<?php echo $user["last_name"] ?>">
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?php echo $user["email"] ?>">
        <label for="password">password</label>
        <input type="password" name="password" id="password" value="<?php echo $user["password"] ?>">
        <input type="submit" value="Update">

    </form>
</body>

</html>