<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт домашнего Кота</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		var array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
		var m = "НЕ ХВАТАЕТ ВЫЧИСЛИТЕЛЬНОЙ МОЩНОСТИ"

		function readInt() {
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function show(text) {
			document.getElementById("info").innerHTML = text;
		}

		function creationLetter() {
			var newArray = [];
			var userAnswer = readInt();
			for(i = 0; i < userAnswer; i++) {
				var n = parseInt(Math.random() * array.length);
				arrayN = array[n];
				newArray.push(arrayN);
			}
			return newArray;
		}

		function creation() {
			var creation = creationLetter(array).join('');
			if(creation.length == 5) {
				creation = "Grant";
				show(creation);
			} else if (creation.length > 91) {
				var m = "НЕ ХВАТАЕТ ВЫЧИСЛИТЕЛЬНОЙ МОЩНОСТИ";
				show(m);
			} else if(creation.length <= 91) {
				creation = creation[0].toUpperCase() + creation.substring(1);
				show(creation);
			}

		}
		
	</script>
</head>
<body>
	<?php
		include "menu.php";
	?>

	<div class="contentWrap">
		<div class="content">
			<div class="center">

				<h1>Генератор кличек</h1>

				<div class="box">

					 <p id="info">Введите желаемое количество знаков для новой Клички:</p>
					 <input type="text" id="userAnswer">
					 <br><br>
					 <a href="#" onClick="creation();"> создать Кличку</a>

				</div>


			</div>	
		</div>
	</div>

	<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Grant The Cat
	</div>
</body>
</html>