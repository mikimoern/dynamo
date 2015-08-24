<?php
	include ("blocks/db_connect.php");
	if (isset ($_POST['title'])) {
		$title = $_POST['title'];
		if ($title == '') {
		unset ($title);
		}
	}
	
	if (isset ($_POST['date'])) {
		$date = $_POST['date'];
		if ($date == '') {
		unset ($date);
		}
	}	
	
	if (isset ($_POST['image'])) {
		$image = $_POST['image'];
		if ($image == '') {
		unset ($image);
		}
	}
	
	if (isset ($_POST['big_img'])) {
		$big_img = $_POST['big_img'];
		if ($big_img == '') {
		unset ($big_img);
		}
	}
	
	if (isset ($_POST['description'])) {
		$description = $_POST['description'];
		if ($description == '') {
		unset ($description);
		}
	}
	
	if (isset ($_POST['text'])) {
		$text = $_POST['text'];
		if ($text == '') {
		unset ($text);
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
					if ( isset($title) && isset($date) && isset($image) && isset($big_img) && isset($description) && isset($text) ) {
						$result = mysql_query ("INSERT INTO news (title, date, image, big_img, description, text) 
												VALUES ('$title', '$date', '$image', '$big_img', '$description', '$text')", $db);
						if ($result == 'true') {
							echo "<p>Новина була додана</p>";
						}
						else {
							echo "<p>Новина не була додана</p>";
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