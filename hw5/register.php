<?php

require_once 'config.php';

$second_name = $_POST['second_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);

$connect = mysqli_connect(
    DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME
);
$query = "INSERT INTO `users` (first_name, second_name, email, password) 
    VALUES ('{$first_name}', '{$second_name}', '{$email}', '{$pass}')";

 if (mysqli_query($connect, $query)) echo $first_name;