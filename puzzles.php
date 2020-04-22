<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт домашнего Кота</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers) {
			var userAnswer = document.getElementById(inputId).value
			userAnswer = userAnswer.toLowerCase();
			for(i = 0; i < answers.length; i++) {
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}

		function checkAnswers() {
			checkAnswer("userAnswer1", ["12", "двенадцать"]);
			checkAnswer("userAnswer2", ["9", "девять"]);
			checkAnswer("userAnswer3", [40, "сорок"]);
			checkAnswer("userAnswer4", ["сумма"]);

			if(score == 0) {
				alert("Вы отгадали " + score + " загадок!");
			} else if(score == 1) {
				alert("Вы отгадали " + score + " загадку!");
			} else if(score == 2 || score == 3 || score == 4){
				alert("Вы отгадали " + score + " загадки!");
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

				<h1>Игра в загадки</h1>

				<div class="box">

					

					 <p>Сколько месяцев в году имеют 28 дней?</p>
					 <input type="text" id="userAnswer1">

					 <p>У фермера было 17 овец, и все, кроме девяти умерли. Сколько овец осталось у фермера?</p>
					 <input type="text" id="userAnswer2">

					 <p>1 + 4 = 5<br>2 + 5 = 12<br>3 + 6 = 21<br>8 + 11 = ?</p>
					 <input type="text" id="userAnswer3">

					 <p>Что больше сумма всех цифр или их произведение?</p>
					 <input type="text" id="userAnswer4">

					 <br><br>
					 <a href="#" onClick="checkAnswers();"> Ответить</a>

				</div>


			</div>	
		</div>
	</div>

	<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Grant The Cat
	</div>
</body>
</html>