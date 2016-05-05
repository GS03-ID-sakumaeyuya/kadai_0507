<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>スタッフ追加</title>
</head>
<body>
  <h3>スタッフ追加</h3>
	<a href="product/product_add.php">商品ページ</a>
  <form method="post" action="staff_add_check.php">スタッフ名を入力してください<br />
  <input type="text" name="name" style="width:200px"><br />
  パスワードを入力してください<br />
  <input type="password" name="password" style="width:100px"><br />
  パスワードをもう一度入力してください<br />
  <input type="password" name="repassword" style="width:100px"><br />
  <br>
  <input type="button"onclick="history.back()"value="戻る">
  <input type="submit"value="OK">
</form>
<a href="login/staff_top.php">トップメニューへ</a>
</body>
</html>
