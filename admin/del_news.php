<?php
	include ("lock.php");
	include ("blocks/db_connect.php");	
?>	
<!DOCTYPE HTML>
<html>
<head>
	<title>Видалення новини</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="windows-1251">
	<link rel="shortcut icon" type="image/x-icon" href="images/logomin.png">
</head>
<body>
	<div id="wrapper">
		<header>
			<? include ("blocks/header.php"); ?>
		</header>
		
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="contentNews">
					<div class="add">
						<div class='titleNews'>Видалити новину</div>
						<form name="del" action="drop_news.php" method="post">
						<?php 		
							$result = mysql_query ("SELECT title, id FROM news ORDER BY date DESC", $db);	
							$myrow = mysql_fetch_array($result);
					
								do{
								printf ("
									<p><input type='radio' name='id' value='%s' /><label> %s</label>
									</p>",$myrow["id"], $myrow["title"]);	
								}	
							while ($myrow = mysql_fetch_array($result));					
						?>
							<p><input type="submit" name="del" value="Видалити" /></p>
						</form>
					</div>	
				</div>
				
			</div>
		</div>
		<div class="clear"></div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>