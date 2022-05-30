<?php
    // constant mac dinh la bien global
    // co hai cach khai bao hang
    // *cach 1
    define('_AUTHOR_NAME', 'Dao Hoang Son');
    echo _AUTHOR_NAME;
    echo '<br/>';
    
    // *cach 2
    const _AUTHOR_ADDRESS = 'Vietnam';
    echo _AUTHOR_ADDRESS;
    echo '</br>';

    // check hang so co ton tai
    $checkDefined = defined('_AUTHOR_NAME');
    var_dump($checkDefined);