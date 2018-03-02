<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
	<head>
		<title>Главная страница</title>
		<link href="login.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<section class="container">
			<div class="login" id="login" style="display:block">
				<h1>Главная страница</h1>
				<form action="login.php" method="post">
					<p>
						<input name="username" type="text" placeholder="Логин">
					</p>
					<p>
						<input name="password" type="password" placeholder="Пароль">
					</p>
					<p>
						<input type="submit" name="submit" value="Войти">
						<br>
						<a href="regpage.php">Ещё нет аккаунта? Создайте!</a> 
					</p>
				</form>
			</div>
		</section>
		<?php
		// Проверяем, пусты ли пересменные логина и id пользователя
		/*if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
			// Если пусты, то мы не выводим ссылку
			echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка доступна только зарегистрированным пользователям</a>";
		} else {
		   // Если не пусты, то мы выводим ссылку
			echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только зарегистрированным пользователям</a>";
		}*/
		?>
	</body>
</html>
