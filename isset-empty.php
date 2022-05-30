<?php
    // isset() kiem tra mot bien co ton tai khong
    // khong kiem tra ve du lieu cua bien
    $num = 0;
    if(isset($num) || $num) {
        var_dump($num);
        echo $num;
    }
    echo '<br/>';

    // empty() chi tra ve boolean
    // tra ve true neu khong ton tai ==== !isset($variable)
    // + '', "", 0, null, trong, array rong, object rong, false
    $str = '';
    var_dump(empty($str));