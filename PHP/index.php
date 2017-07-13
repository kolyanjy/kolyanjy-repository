<?php
//
//$string = 'hello';
//$a = 'array';
//
//$array = array(1, 2, $string, 'php');
//
////array_shift($array);
////
////var_dump($array);
////echo array_pop($$a);

$array = array(
    'orange' => 'gavno',
    'apple' => 'poidet',
    'banana' => 'dildo'
);
$result = '';
//foreach($array as $fruit) {
//    $result .= $fruit . ", ";
//};
//$test = substr(trim($result, ' '), 0, strlen($result) - 2);
//echo $test;
foreach($array as $fruit => $status) {
    $result .= $fruit . ": " . $status;
    break;
}
echo $result;





?>



<html>
<head>
<meta charset='utf-8'/>
<title>PHP</title>
</head>
<body>
<form method='post' action='check.php'>
    <input type='text' name='login'/>
    <input type='password' name='pass'/>
    <input type='submit' value='GO'/>


</form>

</body>

</html>

