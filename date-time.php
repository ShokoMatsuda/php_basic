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
        ?>
    </p>
</body>
</html>