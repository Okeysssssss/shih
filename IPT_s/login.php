<?php

if(isset($_POST['login_btn'])){
    require('validation.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $UserLogin = new MainClass($username, $password);
    $UserLogin->login();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="login_style.css">
    <title>Staff Login</title>
</head>
<body>
    <section class="login">
        <h2>STAFF LOGIN</h2> 
        <form action="login.php" method="POST" class="login_form">
            <label for="username">Username</label>
            <input type="text" name="username" required>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="login_btn" value="Log In">
            <a href="index.php">Back</a>
        </form>
    </section>
</body>
</html>
