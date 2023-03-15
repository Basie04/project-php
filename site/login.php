<?php
if(empty($_POST)){
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
            <label for="username">username</label>
            <input type="text" name="username" id="username"> <br>
            <label for="pasw">password</label>
            <input type="password" name="password" id="password"> <br>
            <input type="submit" value="login" name="submit">
        </form>
    </body>
    </html>

<?php
}
else{
    session_start();
    require "database.php";

    if(!isset($_POST['username']) || !isset($_POST['password']) || empty($_POST['username']) || empty($_POST['password'])){
        echo "1 of meerdere velden zijn niet ingevult";
        die;
    }



    $stmt = $conn->prepare("SELECT * FROM users WHERE first_name = :username AND password = :pasw LIMIT 1");
    $stmt->bindParam(":username", $_POST["username"]);
    $stmt->bindParam(":pasw", $_POST["password"]);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    
    $_SESSION['user_data'] = $result;


    header('Location: products_index.php');
    die;





}