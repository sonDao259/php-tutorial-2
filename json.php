<?php
// json encode -> ma hoa sang json type
$cars = [1=>'Ford', 2=>'Mercedes'];
var_dump(json_encode($cars));

// json decode
$jsonCars = '{1:"Ford", 2:"Mercedes"}';
var_dump(json_encode($jsonCars));