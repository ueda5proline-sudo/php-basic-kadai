<?php
// Step2. 変数を作成して値を代入
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// Step3. 合計点と平均点を算出
$total = $score1 + $score2 + $score3 + $score4 + $score5
        + $score6 + $score7 + $score8 + $score9 + $score10;

$average = $total / 10;

// 平均点を出力
echo "平均点は " . $average . " 点です。";
?>
