<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
 
  <body>
    <p>
      <?php
      // 配列を作成し、値を代入する
        $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60
        ];
        // 合計点と平均点を算出する
        $total = array_sum($scores);
        $average = $total / count($scores);
        // 平均点をブラウザに出力する
        echo "平均点は{$average}点です。";
      ?>
    </p>
  </body>

</html>