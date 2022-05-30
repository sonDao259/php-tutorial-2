<?php
    // 1. kieu int
    $num1 = 10;
    var_dump($num1);
    echo '</br>';

    // *kiem tra so nguyen
    $checkInt = is_int($num1);
    var_dump($checkInt);
    echo '</br>';

    // 2. kieu boolean
    $isTrue = true;

    // *kiem tra boolean
    $checkBoolean = is_bool($isTrue);
    var_dump($checkBoolean);
    echo '</br>';

    // *ep kieu boolean: 0, '', "", null -> false // con lai -> true
    $isTrue = null;
    $checkBoolean = (bool)$isTrue;
    var_dump($checkBoolean);
    echo '</br>';

    // 3. kieu float

    // 4. kieu string

    // 5. kieu array
    $userList = ['Son', 'Hoang'];
    var_dump($userList);
    echo '<br/>';

    // 6. kieu null

    // 7. kieu resource
    $curl = curl_init();

    // 8. kieu object
    $car = new StdClass();
    $car->brand = 'Mercedes';
    var_dump($car);
    echo '<br/>';

    /* 
        phan biet empty va null
    */

    $message1 = null;
    $message2 = '';
    var_dump($message1);
    echo '<br/>';
    var_dump($message2);