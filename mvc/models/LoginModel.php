<?php

class LoginModel extends Model
{
    public function auth()
    {
        $login = $_POST['email'];
        $pass = $_POST['pass'];
        $connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
        $query = "SELECT * FROM users WHERE email = '{$login}' AND pass = '{$pass}'";
        $user = mysqli_query($connect, $query);
        return mysqli_fetch_assoc($user);
    }
}