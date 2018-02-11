<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Montrackログイン</title>
<link rel="stylesheet" href="login.css"/>
</head>
<body>
	<h1>Montra にログイン</h1>
	<br>
	<form id="loginForm" action="login/main.php" method="post">
		<input type="text" name="userid" required placeholder="ユーザー名">
		<br>
		<input type="password" name="password" required placeholder="パスワード">
		<br>
		<input type="submit" name="execute" value="ログイン">
	</form>
</body>
</html>