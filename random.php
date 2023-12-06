<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // 変数$diceにサイコロの出目（1～6までのランダムな整数）を代入する
        $dice = mt_rand(1, 6);

        // サイコロの出目を出力する
        echo "{$dice}の目が出ました。";
        ?>
    </p>
</body>
</html>