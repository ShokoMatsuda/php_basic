<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // 使用するデフォルトのタイムゾーンを指定する
        date_default_timezone_set('Asia/Tokyo');

        // 現在の日時を指定したフォーマットで出力する
        echo date('Y年n月j日H時i分s秒') . '<br>';

        // 現在を基準として1週間後の日時のUNIXタイムスタンプを出力する
        echo strtotime('+1 week') . '<br>';

        // 現在を基準として3年前の日時を指定したフォーマットで出力する
        echo date('Y/m/d H:i:s', strtotime('-3 year'));
        ?>
    </p>
</body>
</html>