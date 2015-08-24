<?php
	include ("blocks/db_connect.php");
	$result = mysql_query ("SELECT * FROM history_coaches", $db);
	
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
			<? include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? $j=6; include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="history_coach">
					<div class="titleNews">ТРЕНЕРИ</div>
					<table>
									<tr>
										<th>Період праці</th>
										<th>Головний тренер</th>
										<th>Кращий результат</th>										
									</tr>
					<?php
						do {
							printf ("
									<tr>
										<td>%s</td>
										<td>%s</td>	
										<td>%s</td>
									</tr>",$myrow["period"], $myrow["name"],$myrow["result"]);
						}
						while ($myrow = mysql_fetch_array($result));	
					?>	
					</table>
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