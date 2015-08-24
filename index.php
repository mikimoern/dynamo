<?php
	include ("blocks/db_connect.php");
	$result = mysql_query ("SELECT title, quantity FROM achievement", $db);
	
	if (!$result) {
		echo "<p>Запрос не прошел. Код ошибки:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($result) > 0) {		
	$myrow = mysql_fetch_array($result);
	}
	else {
		echo "Таблица пуста";
		exit();
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>FC Dinamo Kiev</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="windows-1251">
	<link rel="shortcut icon" type="image/x-icon" href="images/logomin.png">
</head>
<body>
	<div id="wrapper">
		<header>
			<? include ("blocks/header.php"); ?>
		</header>
		<div id="top">
			<? $i=1; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
					<div id="achievment">
						<?php
							do{
								printf ("<p>%s <span> %s</span></p>",$myrow["title"],$myrow["quantity"]);
							}
							while ($myrow = mysql_fetch_array($result));
						?>
					</div>
					<div class="clear"></div>
					<div id="contentNews">
						<article>
							<h1>Логотип ДИНАМО</h1>
							<div id="logotip"></div>
							<h2>Гімн "Динамо"</h2>
							<p>	Стадион, как вулкан, раскален докрасна<br>
								И терпения чаша испита до дна,<br>
								Но взорвутся трибуны и выйдите вы –<br>
								Гладиаторы боя, герои молвы.<br>
								И начнется великая драма, а в ней<br>
								Никогда не предскажешь, кто будет сильней.<br>
								И замрет от волнения главный стратег,<br>
								Вместе с нами отчаянно веря в успех…<br>
								<br>
								ПРИСПІВ<br>
								ДИНАМО-ДИНАМО О-О-О!<br>
								ДИНАМО-ДИНАМО О-О-О!<br>
								ДИНАМО-ДИНАМО О-О-О!<br>
								ДИНАМО-ДИНАМО О-О-О!<br>
								<br>
								Это поле от пахоты вашей черно,<br>
								Сколько горького пота впитало оно,<br>
								Часто падали вы на траву в забытьи,<br>
								И, как знаки судьбы, были жесты судьи.<br>
								Но сегодня игра так похожа на бой –<br>
								Нужно выстоять, выдержать, вытерпеть боль<br>
								И зубами скрипя, когда слов уже нет,<br>
								Пробиваться сквозь тернии к звездам побед.<br>
								<br>
								ПРИСПІВ<br>
								<br>
								Пусть Фортуна бывала жестокой подчас,<br>
								Но она лишь упорнее делала вас,<br>
								И жестокие травмы забыть не дадут,<br>
								Что победа – награда за каторжный труд.<br>
								И опять, как Везувий, ревет стадион,<br>
								Снова верит, и ждет, и надеется он,<br>
								Бьется пламя страстей и волнуется кровь,<br>
								И, забыв обо всем, мы скандируем вновь.<br>
								<br>
								ПРИСПІВ<br>
								<br>
								<span class="author">Музика: Вадима Лащука</span><br>

								<span class="author">Слова: Анатолія Матвійчука</span>
							</p>
						</article>
					</div>	
				<div class="clear"></div>
			</div>
		</div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>