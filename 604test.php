<?php

function sum1($a,$b){
    $result = 0;
    for($i = $a; $i <= $b; $i++){
    $result = $result + $i;
}
print $result.PHP_EOL;
}

sum1(3,5);
sum1(1,53446);
?>

<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = date("h");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <?php if (6 <= $now_hour && $now_hour < 12) { ?>
            <p>おはよう、太郎さん</p>
        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
            <p>こんにちは、太郎さん</p>
        <?php } else { ?>
            <p>こんばんは、太郎さん</p>
        <?php } ?>
    </body>
</html>