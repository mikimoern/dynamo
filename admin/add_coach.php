<?php
	include ("blocks/db_connect.php");
	if (isset ($_POST['position'])) {
		$position = $_POST['position'];
		if ($position == '') {
		unset ($position);
		}
	}
	
	if (isset ($_POST['name'])) {
		$name = $_POST['name'];
		if ($name == '') {
		unset ($name);
		}
	}	
	
	if (isset ($_POST['country'])) {
		$country = $_POST['country'];
		if ($country == '') {
		unset ($country);
		}
	}
	
	if (isset ($_POST['img'])) {
		$img = $_POST['img'];
		if ($img == '') {
		unset ($img);
		}
	}
	
	if (isset ($_POST['team'])) {
		$team = $_POST['team'];
		if ($team == '') {
		unset ($team);
		}
	}
	
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Добавленя новини</title>
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
				<?php
					if ( isset($position) && isset($name) && isset($country) && isset($img) && isset($team) ) {
						$result = mysql_query ("INSERT INTO coachs (position, name, country, img, team) 
												VALUES ('$position', '$name', '$country', '$img', '$team')", $db);
						if ($result == 'true') {
							echo "<p>Тренер був доданий</p>";
						}
						else {
							echo "<p>Тренер не був доданий</p>";
						}
					}
					else  {
						echo "<p>Ви ввели не всі дані</p>";
					}
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