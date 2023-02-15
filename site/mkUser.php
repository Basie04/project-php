<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="createUser.php" method="post">
        <label for="firstname">first name</label>
        <input type="text" name="firstname" id="firstname"><br>
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname"><br>
        <label for="email">email</label>
        <input type="text" name="email" id="email"><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"><br>
        <label for="ip_address">ip address</label>
        <input type="text" name="ip_address" id="ip_address"><br>
        <input type="submit" value="submit" name="submit">


    </form>
</body>

</html>