<?php
	include ("lock.php");
	include ("blocks/db_connect.php");	
	if (isset ($_GET['id'])) {$id = $_GET['id'];}
?>	
<!DOCTYPE HTML>
<html>
<head>
	<title>Редагувати інформацію про тренера</title>
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
					<div class='titleNews'>Pедагувати тренера</div>
					<?php 
					
					if (!isset($_GET['id'])) {
						$result = mysql_query ("SELECT name, id FROM coachs", $db);	
						$myrow = mysql_fetch_array($result);
				
							do{
							printf ("
								<p><a href = 'edit_coach.php?id=%s'>%s</a></p>",$myrow["id"], $myrow["name"]);	
							}	
						while ($myrow = mysql_fetch_array($result));
					}
					else{
						$result = mysql_query ("SELECT * FROM coachs WHERE id=$id", $db);		
						$myrow = mysql_fetch_array($result);
					    print <<<HERE
							<div class="add">
								<form name="add_coach" action="update_coach.php" method="post">
									<div>
										<p><input type="text" name="position" value="$myrow[position]" /></p>
										<p><input type="text" name="name" value="$myrow[name]" /></p>
										<p><input type="text" name="country" value="$myrow[country]" /></p>
										<p><input type="text" name="img" value="$myrow[img]" /></p>
										<p>
											<label>Виберіть команду<br />
												<select name="team">
													<option value="$myrow[team]">$myrow[team]</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</label>
										</p>
										<p><input type="hidden" name="id" value="$myrow[id]"/></p>
										<p><input type="submit" name="add_coach" value="Зберегти" /></p>
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