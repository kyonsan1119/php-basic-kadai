<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>個人情報入力フォーム</title>
</head>
<body>
  <form action="confirmation.php" method="post">
    <h2>個人情報入力フォーム</h2>
      <p>お名前 <input type="text" name="name" placeholder="お名前"></p>
      <input type="radio" name="gender" value="男性">男性
      <input type="radio" name="gender" value="女性">女性
      <p>メールアドレス <input type="email" name="email" placeholder="メールアドレス"></p>
      <input type="submit" value="送信">
  </form>
</body>
</html>
