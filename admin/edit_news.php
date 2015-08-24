<?php
	include ("lock.php");
	include ("blocks/db_connect.php");	
	if (isset ($_GET['id'])) {$id = $_GET['id'];}
?>	
<!DOCTYPE HTML>
<html>
<head>
	<title>Редагування новини</title>
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
					<div class='titleNews'>Редагувати новину</div>
					<?php 
					
					if (!isset($_GET['id'])) {
						$result = mysql_query ("SELECT title, id FROM news ORDER BY date DESC", $db);	
						$myrow = mysql_fetch_array($result);
				
							do{
							printf ("
								<p><a href = 'edit_news.php?id=%s'>%s</a></p>",$myrow["id"], $myrow["title"]);	
							}	
						while ($myrow = mysql_fetch_array($result));
					}
					else{
						$result = mysql_query ("SELECT * FROM news WHERE id=$id");		
						$myrow = mysql_fetch_array($result);
					    print <<<HERE
							<div class="add">
								<form name="add_news" action="update_news.php" method="post">
									<div>
										<p><input type="text" name="title" id="title" value="$myrow[title]" /></p>
										<p><input type="text" name="date" id="date" value="$myrow[date]"/></p>
										<p><input type="text" name="image" id="image" value="$myrow[image]" /></p>
										<p><input type="text" name="big_img" id="big_img" value="$myrow[big_img]" /></p>
										<p><textarea name="description" id="description" cols="80" rows="5" >$myrow[description]</textarea></p>
										<p><textarea name="text" id="text" cols="80" rows="15" >$myrow[text]</textarea></p>
										<p><input type="hidden" name="id" value="$myrow[id]"/></p>
										<p><input type="submit" name="add_news" value="Зберегти" /></p>
									</div>
								</form>
							</div> 
HERE;
					}	
					?>
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