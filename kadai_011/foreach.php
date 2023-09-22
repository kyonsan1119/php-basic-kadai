<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
 
  <body>
    <p>
      <?php
      // 連想配列を作成する
      $array = [
        "名前" => "玉ねぎ",
        "値段" => 200,
        "産地" => "北海道",
      ];

      // 値を出力する
      foreach ($array as $key => $value) {
        $name = $key;
        $value = $value;
        echo "$name: $value";
        echo "<br>";
      }
      ?>
    </p>
  </body>

</html>