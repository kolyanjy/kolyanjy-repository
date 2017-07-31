<?php

require_once "config.php";
$name = $_GET['name'];
$price = intval($_GET['price']);
$weight = intval($_GET['weight']);
$material = $_GET['material'];

function insertGood($name, $price, $weight, $material) {


    $connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
    $query = "INSERT INTO `goods` (name, price, weight, material) 
        VALUES ('{$name}', {$price}, {$weight}, '{$material}')";
    return mysqli_query($connect, $query);
}

echo insertGood($name, $price, $weight, $material) ? 'work' : 'net';