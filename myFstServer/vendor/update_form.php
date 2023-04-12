<?php
//    редактирование элементов на phpMyAdmin
    require_once ('../config/connect.php');

    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE id = $product_id");
    $product = mysqli_fetch_assoc($product);
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="./update.php" method="post">
        <input type="hidden" name="hidId" value="<?=$product_id?>"><br>
        Name:<br>
        <input name="name" type="text" value="<?=$product['product_name']?>"><br>
        Text:<br>
        <input name="description" type="text" value="<?=$product['product_text']?>"><br>
        Price:<br>
        <input name="new_price" type="number" value="<?=$product['product_price']?>"><br><br>
        <button type="submit">Send</button>
    </form>
</body>
</html>