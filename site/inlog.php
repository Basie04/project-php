<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    require 'database.php';

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (is_array($user) && count($user) > 0) { ///yeah user is found
        //test wachtwoord
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = $_POST['password']; //ingevulde wachtwoord

            if ($user["password"] == $password) {
                echo "Deze gebruiker is authenticated";
            }
        }
    }
}
