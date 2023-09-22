<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
 
  <body>
    <p>
      <?php
      // 1: 連想配列を作成する
      $vegetables = [
      "name" => "onion",
      "price" => 200,
      "weight" => 160,
      ];
      // 2: 値を出力する
      print_r($vegetables);
      ?>
    </p>
  </body>

</html>