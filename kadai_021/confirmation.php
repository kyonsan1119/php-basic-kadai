<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
</head>
<body>
  <h2>確認画面</h2>
  <p>以下の内容で送信しました</p>
  <p>お名前：<?php echo $_POST['name']; ?></p>
  <p>性別：<?php echo $_POST['gender']; ?></p>
  <p>メールアドレス：<?php echo $_POST['email']; ?></p>

  <input type="button" value="戻る" onclick="history.back()">
</body>
</html>
