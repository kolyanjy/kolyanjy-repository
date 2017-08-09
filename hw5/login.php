<?php
require_once "config.php";


if ((isset($_COOKIE['login'])) && (isset($_COOKIE['pass'])))
{
    $login = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];
}
else
{
    $login = $_POST['email'];
    $pass = md5($_POST['pass']);

    setcookie('login', $login);
    setcookie('pass', $pass);
}



$connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
$query = "SELECT id, second_name, first_name FROM users WHERE email = '{$login}' AND password = '{$pass}'";
$getUser = mysqli_query($connect, $query);
if ($getUser) {
    $result = mysqli_fetch_assoc($getUser);
    $userId = $result['id'];
    $name = $result['second_name'] . ' ' . $result['first_name'] . '. список ваших контактов:</br>';
    echo $name;
    $queryContacts = "SELECT phone_number, first_name, second_name FROM contacts WHERE user_id = '{$userId}'";
    $getContacts = mysqli_query($connect, $queryContacts);
    $resultArr = [];
    while($row = mysqli_fetch_assoc($getContacts)){
        array_push($resultArr, $row);

    }
    foreach($resultArr as $name){
        foreach ($name as $val){
            echo $val . ' ';
        }
        echo '<br>';
    }
}else {
    echo false;
}
