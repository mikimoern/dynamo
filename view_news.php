<?php
	include ("blocks/db_connect.php");
	
	if (isset ($_GET['id'])) {$id = $_GET['id'];}
	if (!isset ($id)) {$id = 1;}
	
	if(!preg_match('~^[\d]+$~', $id)){
		exit ("<p>Невірний формат запиту</p>");
	}
	
	$result = mysql_query ("SELECT text, title, big_img, date, view FROM news WHERE id='$id'", $db);
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
			<? include ("blocks/menu.php"); ?>			
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
							<section class='bottom_info'>
							<h2>%s</h2>
							<div class='news_img'>
								<img src='%s' alt='' />
							</div>
							<p>%s</p>
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
							</section>",$myrow["title"], $myrow["big_img"], $myrow["text"], $myrow["view"], $myrow["date"]);	
					}
					while ($myrow = mysql_fetch_array($result));		
				?>		
			</div>
		</div>
		<div class="clear"></div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>