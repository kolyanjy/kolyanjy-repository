<?php

class RegisterModel extends Model
{
    public function register()
    {
        $login = $_POST['email'];
        $pass = $_POST['pass'];
        $connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
        $query = "INSERT INTO `users` (email, pass) VALUES ('{$login}', '{$pass}')";
        mysqli_query($connect, $query);
    }
}
