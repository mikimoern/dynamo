<?php
	include ("blocks/db_connect.php");

	if (isset ($_POST['id'])) {
		$id = $_POST['id'];
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>�������� ������</title>
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
					if ( isset($id)) {
						$result = mysql_query ("DELETE FROM players WHERE id='$id'", $db);
						if ($result == 'true') {
							echo "<p>������� ��� ���������</p>";
						}
						else {
							echo "<p>������� �� ��� ���������</p>";
						}
					}
					else  {
						echo "<p>��������� �� �������</p>";
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