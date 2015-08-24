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
	
	if (isset ($_POST['number'])) {
		$number = $_POST['number'];
		if ($number == '') {
		unset ($number);
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
	if (isset ($_POST['id'])) {
		$id = $_POST['id'];
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
					if ( isset($name) && isset($number) && isset($country) && isset($img) && isset($position) && isset($team) ) {
						$result = mysql_query ("UPDATE players SET position='$position', name='$name', country='$country',
												img='$img',	team='$team', number='$number' WHERE id='$id'", $db);
						if ($result == 'true') {
							echo "<p>Дані про гравця були оновлені</p>";
						}
						else {
							echo "<p>Дані про гравця не були оновлені</p>";
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