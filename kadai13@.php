<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name"></label>
            <label>年齢: <input type="text" name="target_age"></label>
            <input type="submit" value="送信">
        </form>
        <p>今は19時です。</p>
        <p>こんばんは、<?php print $_POST['target_name']; ?>さん(<?php print $_POST['target_age']; ?>歳)</p>
    </body>
</html>