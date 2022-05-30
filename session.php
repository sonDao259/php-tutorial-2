<?php
if(session_id() === '')
    session_start();
    echo 'sesson is running';

if(isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}

echo 'Ban da truy cap  '.$_SESSION['counter'].' lan';

phpinfo();

session_destroy();