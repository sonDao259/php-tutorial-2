<?php
    // filter validate email
    $email = 'sondao@gmail.com';
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo 'Valid email';
    }
    else echo 'Invalid email';
    echo '<br/>';

    // filter validate url
    $url = 'https://domain.com';
    if(!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo 'Valid url';
    }
    else echo 'Invalid url';
    echo '<br/>';

    // filter validate url bat buoc co chuoi query
    $url = 'https://domain.com?lanluage=en';
    if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo 'Valid url';
    }
    else echo 'Invalid url';