<?php


if (isset($_COOKIE["user"])) {
    $user = unserialize($_COOKIE["user"]);
    var_dump($user);
    echo "hi " . $user['name'];
}else {
    echo "gg";
}