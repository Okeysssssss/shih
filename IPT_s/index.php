<?php
require('validation.php');

@$User = new MainExtends($_SESSION['user'], null);

if(@$_SESSION['status'] == "valid"){

    $_SESSION['user'] = $User->user();

    echo "<script>
        window.location.href = 'dashboard.php'
    </script>";
}else{
    $_SESSION['status'] = "";
    $_SESSION['user'] = "";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="main.css">
    <title>Vape Cloud</title>
</head>
<body>
    <nav>
        <h1><img src="" alt="">Vape Cloud</h1>
        <a href="login.php">LOG IN</a>
    </nav>
    <section>
        <img src="geekvape.jpg" alt="">
        <p>Enjoy the brilliance of the best Vape Shop of the world!</p>
        <a href="buy_now.php"><button class ="Take Order">Take Order</button></a>
    </section>
</body>
</html>