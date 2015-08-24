<?php
	include ("blocks/db_connect.php");
	$result = mysql_query ("SELECT image, description FROM sponsors", $db);
	
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
				<? $j=9; include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="sponsors">
					<div class="titleNews">ПАРТНЕРИ</div>
					<h4>Офіційні спонсори та партнери</h4>
					<table>
					<?php
						do {
							printf ("<tr>
										<td><img src='%s' ></td>
										<td>%s</td>					
									</tr>",$myrow["image"],$myrow["description"]);
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