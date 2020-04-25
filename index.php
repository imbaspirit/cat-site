<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт домашнего Кота</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		include "menu.php";
	?>

	<div class="content">
		<h1>Личный сайт домашнего Кота</h1>
		<div class="center">
			<img src="img/cat1.jpg" alt="фотография">

			<div class="box_text">
				<p>
					<b>Привет, меня зовут Грант.</b> 
					<br>
					Я живу с матерью и отчимом на хате в СПб. Сейчас в городе карантин и мне стало очень тяжело жить в доме, когда хозяева все время рядом. Поэтому, чтобы не унывать, я решил сделать свой собственный сайт.
				</p>

				<p>
					В этом мне очень помог
					<a href="">
					данный Ресурс</a>.
				</p>

				<p>
					Мой сайт включает в себя следующие сервисы:<br>интерактив с одними и теми же 4 загадками, сервис помощи в разрешении споров, сервис генерации Уникальных кличек для животных и помошник в изучении английских слов.
				</p>
					<a href="index.php">Главная</a>
					<a href="puzzles.php">Загадки</a>
					<a href="guess.php">Разрешить спор</a>
					<a href="gen.php">Генератор</a>
					<a href="english.php">English</a>
					<br><br>

			</div>
		</div>
	</div>

	<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Grant The Cat
	</div>
</body>
</html>