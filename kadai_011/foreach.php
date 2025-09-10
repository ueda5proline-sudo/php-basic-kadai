<?php
// Step2. 連想配列を作成
$items = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// Step3. foreach文で出力
foreach ($items as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
