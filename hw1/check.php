<?php
/**
 * Created by PhpStorm.
 * User: nikolay
 * Date: 02.07.17
 * Time: 22:19
 */


$login = $_POST['login'];
$pass = md5($_POST['pass']);

$names = array(
    'Olya' => array(
        'login' => 'Olya',
        'pass' => '3610802f67bda67fb49de4b35a93eb7e',
        'male'=> 0,
        'age' => 'мало'

    ),
    'Dima' => array(
        'login' => 'Dima',
        'pass' => '4085c6bd955d1445b1bd70ece5baf454',
        'male'=> 1,
        'age' => 21

    ),
    'Kolya' => array(
        'login' => 'Kolya',
        'pass' => 'ef17227670b855a11ff04d6032bda241',
        'male'=> 1,
        'age' => 20

    )
);
$flag = 0;

foreach ($names as $people => $specification){

    if (($specification["login"] == $login)&&($specification["pass"] == $pass)){

        echo "привет " . $specification["login"] . " тебе " . $specification["age"] . " лет";
        ++$flag;
        break;
    }
}
if (!$flag) echo "пользователь не найден";