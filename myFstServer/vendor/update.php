<?php
    require_once ('../config/connect.php');

    $id = $_POST['hidId'];
    $name = $_POST['name'];
    $text = $_POST['description'];
    $price = $_POST['new_price'];

    mysqli_query($connect, "UPDATE `products` SET `product_name` = '$name', `product_text` = '$text', `product_price` = '$price' WHERE id = $id");

    header('location: /');



