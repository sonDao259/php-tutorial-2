<?php
function sum($num1, $num2) {
    return $num1 + $num2;
}
echo sum(1, 3);
echo '</br>';

// bien cuc bo 
function showMsg() {
    $msg = 'Bien cuc bo';
    echo $msg;
}
//echo $msg; --err
showMsg();
echo '</br>';

// bien toan cuc -> khai bao global de su dung ben trong function
$info = 'Bien toan cuc';
function showInfo() {
    global $info;
    echo $info;
}
showInfo();
echo '</br>';

// bien tinh: khong thay doi gia tri khi goi lai ham
function increase() {
    static $index = 0;
    $index++;
    return $index;
}
echo increase();
echo '</br>';
echo increase();
echo '</br>';

//tham chieu
function alert(&$str) {
    $str .= ' !!!';
    echo $str;
}
$str = 'Alert';
alert($str);
echo '</br>';
echo $str;
echo '</br>';

// ham khong gioi han tham so truyen vao
// function getNums() {
//     $params = func_get_args();
//     print_r($params);
// }

function getNums(...$params) {
    print_r($params);
}

getNums(1, 2, 3);