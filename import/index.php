<?php
    // 1. path file
    echo __FILE__;
    echo '<br/>';

    // 2. path dir
    echo __DIR__;
    echo '<br/>';

    // 3. import module bang include

    $path_dir = __DIR__.'\folder';
    include $path_dir.'\header.php';

    /**
     * include, include_once neu loi, chuong trinh phia sau van chay
     * nguoc lai require, require_once thi khong
     */