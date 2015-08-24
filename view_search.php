<?php
	include ("blocks/db_connect.php");

	if (isset ($_POST['search']))
	{
		$search = $_POST['search'];	
	}
	
	if (isset ($_POST['query']))
	{
		$query = $_POST['query'];	
	}
	
	if (isset ($search))
	{
		if (empty ($query) or strlen($query) < 3)
		{
			exit ("<p>����� ������ ��������� ������, ��� �� ����� 3-� ��������.</p>");
		}
		$query = trim($query); 
		$query = stripslashes($query);
		$query = htmlspecialchars($query);
	}	
	else
	{
		exit("<p>����� ������ ��������� ������.</p>");
	}	
	
	$result = mysql_query ("SELECT * FROM news WHERE title LIKE '%$query%' OR text LIKE '%$query%' 
							OR description LIKE '%$query%' ORDER BY id LIMIT 10", $db);
	if (!$result) {
		echo "<p>������ �� ������. ��� ������:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($result) > 0) {		
	$myrow = mysql_fetch_array($result);
	$new_view = $myrow["view"] + 1;
	$update_view = mysql_query ("UPDATE news SET view='$new_view' WHERE id='$id'", $db);
	}
	else {
		echo "������� �����";
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
				<div class='titleNews'>������</div>
				<?php  
					do{
						printf ("
							<section>
							<div class='article_img'>
								<img src='%s' alt='' />
							</div>
							<h2>%s</h2>
							<p>%s</p>
							<a class='more' href='view_news.php?id=%s'>���������</a>
							<div class='clear'></div>
							<div class='article_info'>
								<ul>
									<li>
										<img src='images/icon_user.png' alt='' />
									</li>
									<li>���������: %s</li>
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
		<div class="clear"></div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>