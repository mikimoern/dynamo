<?php
	include ("blocks/db_connect.php");
	$result = mysql_query ("SELECT * FROM news ORDER BY date DESC", $db);
	if (!$result) {
		echo "<p>Запрос не прошел. Код ошибки:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($result) > 0) {		
	$myrow = mysql_fetch_array($result);
	$new_view = $myrow["view"] + 1;
	$update_view = mysql_query ("UPDATE news SET view='$new_view' WHERE id='$id'", $db);
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
			<? $i=2; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class='titleNews'>Новини</div>
				<?php  
					do{
						printf ("
							<section>
							<div class='article_img'>
								<img src='%s' alt='' />
							</div>
							<h2>%s</h2>
							<p>%s</p>
							<a class='more' href='view_news.php?id=%s'>Прочитати</a>
							<div class='clear'></div>
							<div class='article_info'>
								<ul>
									<li>
										<img src='images/icon_user.png' alt='' />
									</li>
									<li>Переглядів: %s</li>
									<li>%s</li>
								</ul>
							<div class='clear'></div>
							</div>
							</section>",$myrow["image"], $myrow["title"], $myrow["description"], $myrow["id"], $myrow["view"], $myrow["date"]);	
					}
					while ($myrow = mysql_fetch_array($result));		
				?>		
			</div>
		</div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>