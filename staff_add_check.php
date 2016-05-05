<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>php練習</title>
</head>
<body>
  <?php
    // require_once('common/sabitize.php');
    // $sanitize = sanitize($_POST);

    $staff_name = $_POST['name'];
    $staff_password = $_POST['password'];
    $staff_repassword = $_POST['repassword'];


    $staff_name = htmlspecialchars($staff_name);
    $staff_password = htmlspecialchars($staff_password);
    $staff_repassword = htmlspecialchars($staff_repassword);
    if($staff_name == "")
    {
        print 'スタッフ名が入力されていませ<br />';
    }
    else
    {
      print 'スタッフ名:';
      print $staff_name;
      print '<br />';
    }
    if($staff_password == "")
    {
        print 'パスワードが入力されていません<br />';
    }
    if($staff_password != $staff_repassword)
    {
      print 'パスワードが一致しません';
    }

    if($staff_name =="" || $staff_password =="" || $staff_password != $staff_repassword)
    {
      print '<form><input type="button" onclick="history.back()"value="戻る"></form>';
    }
    else
    {
      $staff_password = md5($staff_password);
      print '<form method="post" action="staff_add_done.php">';
      print '<input type="hidden" name="name" value="'.$staff_name.'">';
      print '<input type="hidden" name="password" value="'.$staff_password.'">';
      print '<br />';
      print '<input type="button" onclick="history.back()"value="戻る">';
      print '<input type="submit" value="OK">';
      print '</fomr>';
    }
   ?>
</body>
</html>
