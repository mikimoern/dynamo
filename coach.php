<?php
	include ("blocks/db_connect.php");
	$head_coach = mysql_query ("SELECT * FROM coachs WHERE team=1 		
							AND position='Головний тренер'", $db);
	if (!$head_coach) {
		echo "<p>Запрос не прошел. Код ошибки:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($head_coach) > 0) {		
	$head = mysql_fetch_array($head_coach);
	}
	else {
		echo "Таблица пуста";
		exit();
	}						
							
	$assistant_coach = mysql_query ("SELECT * FROM coachs WHERE team=1 		
							AND position='Помічник головного тренера'", $db);
							
	if (!$assistant_coach) {
		echo "<p>Запрос не прошел. Код ошибки:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($assistant_coach) > 0) {		
	$assistant = mysql_fetch_array($assistant_coach);
	}
	else {
		echo "Таблица пуста";
		exit();
	}
	
	$goalkeeper_coach = mysql_query ("SELECT * FROM coachs WHERE team=1 		
							AND position='Тренер воротарів'", $db);
							
	if (!$goalkeeper_coach) {
		echo "<p>Запрос не прошел. Код ошибки:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($goalkeeper_coach) > 0) {		
	$goalkeeper = mysql_fetch_array($goalkeeper_coach);
	}
	else {
		echo "Таблица пуста";
		exit();
	}
	
	$physical_coach = mysql_query ("SELECT * FROM coachs WHERE team=1 		
							AND position='Тренер з фізпідготовки'", $db);
							
	if (!$physical_coach) {
		echo "<p>Запрос не прошел. Код ошибки:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($physical_coach) > 0) {		
	$physical = mysql_fetch_array($physical_coach);
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
			<? include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? $j=2; include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class='titleNews'>Головний Тренер</div>
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$head["img"], $head["name"],$head["country"]);
						}
						while ($head = mysql_fetch_array($head_coach));
						?>
					
				<div class="clear"></div>
				<div class='titleNews'>Помічники головного тренера</div>	
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$assistant["img"], $assistant["name"],$assistant["country"]);
						}
						while ($assistant = mysql_fetch_array($assistant_coach));
						?>
						
				<div class="clear"></div>
				<div class='titleNews'>Тренер воротарів</div>	
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$goalkeeper["img"], $goalkeeper["name"],$goalkeeper["country"]);
						}
						while ($goalkeeper = mysql_fetch_array($goalkeeper_coach));
						?>	
						
				<div class="clear"></div>
				<div class='titleNews'>Тренери з фізпідготовки</div>	
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$physical["img"], $physical["name"],$physical["country"]);
						}
						while ($physical = mysql_fetch_array($physical_coach));
						?>
			</div>
		</div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>