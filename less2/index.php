<?php
/**
 * Created by PhpStorm.
 * User: nikolay
 * Date: 09.07.17
 * Time: 19:12
 */


function fuck($num, $result = 1) {
    if ((gettype($num) == 'integer') || (gettype($num) == "string")) {
        $num = intval($num);
        for($i = 1; $i <= $num; ++$i){
            $result *= $i;
        }
        return $result;

    }else {
        return "error";
    }

}

//echo fuck("4");

$arr = array(
    "Kolya" => 'me',
    "Olya" => "baba",
    "Dima" => "bandit228",
    "Fedya" => "horosh"
);
//asort($arr);
//var_dump(array_keys($arr));
function _69(array $arr) {
    $arr_keys = array_keys($arr);
    $arr_values = array_reverse(array_values($arr));
    $res_arr = array();
//    for ($i = 0; $i < count($arr_keys); $i++) {
//        $res_arr[$arr_keys[$i]] = $arr_values[$i];
//    }
    return array_combine($arr_keys, $arr_values);
//    return $res_arr;
}
//var_dump(_69($arr));

//---------part 2 -------------------
$login = $_POST['login'];
$pass = $_POST['pass'];
$user = array(
    'name' => $login,
    'password' => $pass,
);
setcookie('user', serialize($user));

//echo $_COOKIE['user'];
header('location: check.php');
