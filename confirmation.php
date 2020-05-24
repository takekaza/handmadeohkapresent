<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>

<body>

<h2>問合せ内容</h2>

<form action="mailto.php" method="post">

<table border="1">
<tr>
<td>名前</td>
<td><?php echo $_POST["subject"]; ?></td>
</tr>
<tr>
<td>メールアドレス</td>
<td><?php echo $_POST["to"]; ?></td>
</tr>
<tr>
<td>問い合わせ内容</td>
<td><?php echo $_POST["message"]; ?></td>
</tr>
</table>

<input type="submit" value="送信"　onclick="location:href='complete.html'" />
</form>

</body>

</html>
