<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step2. Foodクラスを作成
        class Food {
            private $name;
            private $price;

            // コンストラクタ
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // 値段を出力するメソッド
            public function show_price() {
                echo $this->price . "<br>";
            }
        }

        // Step2. Animalクラスを作成
        class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name   = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // 身長を出力するメソッド
            public function show_height() {
                echo $this->height . "<br>";
            }
        }

        // Step3. インスタンスを生成
        $food = new Food("potato", 250);
        $animal = new Animal("dog", 60, 5000);

        // print_rでインスタンスを出力
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br><br>";

        // Step4. メソッドにアクセスして実行
        $food->show_price();   // Foodクラスのpriceを出力
        $animal->show_height(); // Animalクラスのheightを出力
        ?>
    </p>
</body>

</html>
