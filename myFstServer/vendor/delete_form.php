<?php
    require_once ('../config/connect.php');

    $del_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `products` WHERE id = $del_id");
header('location: /');