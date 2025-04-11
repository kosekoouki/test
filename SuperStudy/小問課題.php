<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //桃とイチゴの価格を入れる為の変数
    $price_peach = [];
    $price_strawberry = [];
    //個数をランダムに入れるためのfor文
    for ($i = 0; $i < 15; $i++){
        //範囲内でランダムな数字を出力させる
        $price_peach [] = rand (200 , 300);
        $price_strawberry[] = rand (400 , 500);}
        //桃とイチゴの最大価格を呼び出す関数
        $max_price_peach = max($price_peach);
        $max_price_strawberry = max($price_strawberry);
        //桃とイチゴの最安値を呼び出す関数
        $min_price_peach = min($price_peach);
        $min_price_strawberry = min($price_strawberry);
        //桃とイチゴの平均値を呼び出す関数
        $avg_price_peach = round (array_sum($price_peach) / count($price_peach));
        $avg_price_strawberry = round (array_sum($price_strawberry) / count($price_strawberry));
        //それぞれの最大値、再安値、平均値を出力
        echo "桃の最大値は: $max_price_peach 円<br>";
        echo "イチゴの最大値は: $max_price_strawberry 円<br>";
        echo "桃の最安値は: $min_price_peach 円<br>";
        echo "イチゴの最安値は: $min_price_strawberry 円<br>";
        echo "桃の平均値は: $avg_price_peach 円<br>";
        echo "イチゴの平均値は: $avg_price_strawberry 円<br>";
        ?>
</body>
</html>