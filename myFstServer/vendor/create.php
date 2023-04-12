<?php
//    добавление элементов на phpMyAdmin
    require_once('../config/connect.php');

    $name = $_POST['product_name'];
    $text = $_POST['product_text'];
    $price = $_POST['product_price'];

    mysqli_query($connect, "INSERT INTO `products` (`id`, `product_name`, `product_text`, `product_price`) VALUES (NULL, '$name', '$text', '$price');");
    header('location: /');

