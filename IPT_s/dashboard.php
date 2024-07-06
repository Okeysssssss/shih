<?php 
require('connection.php');
require('validation.php');

$UserLogout = new MainExtends(null,null);
$UserLogout->logout();

if($_SESSION['status'] == "invalid" || $_SESSION['status'] == ""){
    echo "<script>
        window.location.href = 'index.php'
    </script>";
}else{
    $_SESSION['status'] == "valid";
    
}

if(isset($_POST['logout'])){
    
    $_SESSION['status'] = "invalid";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta element="viewport" content="width=device-width, initial-scale=1.0">
    <script>"jquery-3.7.1.min.js"</script>
    <link rel="stylesheet" href="dashboard_style.css">
    <title>Dashboard - VapeCloud</title>
</head>
<body>
    <nav>
        <h1><img src="assets/coffee-cup.png" alt="">Vape Cloud</h1>
        <form action="dashboard.php" method="POST">
            <?php 
                if($_SESSION['user'] == "admin"){
                    echo "<a href='add_staff.php'>ADD STAFF</a>";
                }
            ?>
            <input type="submit" value="LOG OUT" name="logout">
        </form>
    </nav>
    <section>
        <h1>Coffee Order/s</h1>
        <div class="order_list">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Action</th>
                    </tr>
                    <?php

                        $sql_all_orders = "SELECT * FROM orders";
                        $sql_all_con = mysqli_query($conn, $sql_all_orders);

                        $row = $sql_all_con -> fetch_all(MYSQLI_ASSOC);

                        $data = "";

                        foreach($row as $element){
                            
                            $id = $element["id"];
                            $name = $element["name"];
                            $model = $element["model"];
                            $price = $element["price"];
                            $color = $element["color"];

                            @$data .= "<tr>
                                        <td>$name</td>
                                        <td>$model</td>
                                        <td>$price</td>
                                        <td>$color</td>                                       
                                        <td><button id='complete' type='submit' value='$id'>Complete</button></td>
                                    </tr>";
                            
                        }

                        
                        echo $data;
                        
                    ?>
                </table>
                
        </div>
    </section>

<script src="jquery.js"></script>
<script src="dashboard.js"></script>
</body>
</html>