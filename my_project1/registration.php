<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="vaiwport" content="width=device-width, initial-scale=1.0">
		<title>Савченко Тарас</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>	
	<body>
		<?php require('header.php') ?>
			<div class="register">
				<div>
					<form action="check.php" method="post"> <!-- Метод передачі даних пост -->
						<p>Регистрация</p>
						<input type="text" name="login" id="login" placeholder="Введите логин"><br>
						<input type="text" name="name" id="name" placeholder="Введите имя"><br>
						<input type="password" name="password" id="password" placeholder="Введите пароль"><br>
						<button type="submit">Зарегистрировать</button>
				</form>
				</div>
			</div>
		<?php require('footer.php') ?>
	</body>
</html>