<?php
    $number = mt_rand() % 80;

    if ($number < 5) {
        print $number . 'は5より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は5以上の数' . PHP_EOL;
    }
?>
