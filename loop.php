<?php
    // vong lap for
    $count = 3;
    for($i = 1; $i <= $count; $i++) {
        echo 'Da lap qua '.$i.' lan <br/>';
    }

    // cac vi du
    // 1. hien thi so chan, le trong: 1, 2, ... 100
    $start = 1;
    $end = 10;
    $evenNums = '';
    $oddNums = '';
    for($i = $start; $i <= $end; $i++) {
        if ($i % 2 === 0) {
            $evenNums .= $i.' ';
        }else {
            $oddNums .= $i.' ';
        }
    }
    echo 'Day so chan: '.$evenNums;
    echo '<br/>';
    echo 'Day so le: '.$oddNums;
    echo '<br/>';

    // 2. kiem tra 1 so nguyen to
    $num = 6;
    $i = 2;
    if ($num > 1) {
        $check = true;
        for ($i; $i < $num; $i++) {
            if ($num % $i === 0) {
                $check = false;
            }
        }
        if ($check) {
            echo $num.' la so nguyen to';
        }
        else {
            echo $num.' khong phai la so nguyen to';
        }
    } else {
        echo $num.' khong phai la so nguyen to';
    } 
?>
    <?php
        // 3. bang cuu chuong
    ?>
    <table border = '1' width = "100%">
        <?php 
            for ($j = 2; $j <= 9; $j++) {
                if ($j === 2 || $j === 6) {
                    echo '<tr>';
                }
                echo '<td>';
                for ($i = 1; $i <= 10; $i++) {
                    echo $j.'x'.$i.'='.$j*$i.'<br/>';
                }
                echo '</td>';
                if ($j === 5 || $j === 9) {
                    echo '</tr>';
                }
            }
        ?>
    </table>