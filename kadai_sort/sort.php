<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step2. 独自ソート関数の作成
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                echo "昇順にソートします。<br>";
                sort($array); // 昇順ソート
            } else {
                echo "降順にソートします。<br>";
                rsort($array); // 降順ソート
            }

            // ソート後の配列を1行ずつ表示
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // Step4. ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // Step5. 独自ソート関数を呼び出す（昇順 → 降順）
        sort_2way($nums, TRUE);

        echo "<br>"; // 改行を入れる

        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
