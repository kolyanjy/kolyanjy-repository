<?php

require_once 'config.php';

function getData() {
    $connect = mysqli_connect(
        DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME
    );
    $query = "SELECT * FROM `goods`";
    $result = mysqli_query($connect, $query);
    $result_arr = [];

    while($row = mysqli_fetch_assoc($result)) {
        array_push($result_arr, $row);
    }
    return $result_arr;
}

function convertData($data) {
    $result = "";
    foreach ($data as $row) {
        $result .= "<div class='row'>
            <div class='col-md-4'>id: {$row['id']}</div>
            <div class='col-md-2'>name: {$row['name']}</div>
            <div class='col-md-2'>price: {$row['price']}</div>
            <div class='col-md-2'>weight: {$row['weight']}</div>
            <div class='col-md-2'>material: {$row['material']}</div>
        </div>";
    }
    return $result;
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
    <?php
        echo convertData(getData());
    ?>
</div>
</body>
</html>
