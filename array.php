<?php
    $carArr = ['Toyota', 'Kia'];
    echo '<pre>';
    print_r($carArr);
    echo '</pre>';

    $customerArr = [
        'name' => 'Son',
        'age' => 18
    ];

    // xoa phan tu cua mang
    unset($customerArr['age']);
    echo '<pre>';
    print_r($customerArr);
    echo '</pre>';
    
    $animalsArr = [
        'tiger',
        'lion',
        'cat',
    ];
    
    $countriesArr = [
        'Asia' => 'Vietnam',
        'Europe' => 'Spain',
        'Africa' => 'Morroco',
    ];

    // duyet mang tuan tu
    for($i = 0; $i < count($animalsArr); $i++) {
        echo $animalsArr[$i].'<br/>';
    }

    // duyet mang bat ky -> lay ra value
    foreach($countriesArr as $country) {
        echo $country.'<br/>';
    }

    // duyet mang bat ky -> lay ra key
    foreach($countriesArr as $key => $value) {
        echo $key.'<br/>';
    }

    // mang 2 chieu
    $users = [['son', 10, 2], ['hoang', 20, 10]];
    echo '<pre>';
    print_r($users);
    echo '</pre>';

    // array_map & callback
    function show($moto, $color) {
        echo $color.' '.$moto.'<br/>';
    }
    $motos = ['honda', 'yamaha'];
    $colors = ['black', 'white'];
    array_map('show', $motos, $colors);