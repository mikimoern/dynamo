<?php
	include ("blocks/db_connect.php");
	$goalkeeper_player = mysql_query ("SELECT * FROM players WHERE team=1 		
										AND position='�������'", $db);
	if (!$goalkeeper_player) {
		echo "<p>������ �� ������. ��� ������:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($goalkeeper_player) > 0) {		
	$goalkeeper = mysql_fetch_array($goalkeeper_player);
	}
	else {
		echo "������� �����";
		exit();
	}						
							
	$protector_player = mysql_query ("SELECT * FROM players WHERE team=1 		
										AND position='��������'", $db);
							
	if (!$protector_player) {
		echo "<p>������ �� ������. ��� ������:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($protector_player) > 0) {		
	$protector = mysql_fetch_array($protector_player);
	}
	else {
		echo "������� �����";
		exit();
	}

	$midfielder_player = mysql_query ("SELECT * FROM players WHERE team=1 		
										AND position='ϳ���������'", $db);
							
	if (!$midfielder_player) {
		echo "<p>������ �� ������. ��� ������:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($midfielder_player) > 0) {		
	$midfielder = mysql_fetch_array($midfielder_player);
	}
	else {
		echo "������� �����";
		exit();
	}
		
	$attacker_player = mysql_query ("SELECT * FROM players WHERE team=1 		
										AND position='��������'", $db);
							
	if (!$attacker_player) {
		echo "<p>������ �� ������. ��� ������:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($attacker_player) > 0) {		
	$attacker = mysql_fetch_array($attacker_player);
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
			<? $j=1; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class='titleNews'>�������</div>
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>
											<h4>%s</h4>											
											<p>%s</p>
										  </div>",$goalkeeper["img"], $goalkeeper["number"], $goalkeeper["name"], $goalkeeper["country"]);
						}
						while ($goalkeeper = mysql_fetch_array($goalkeeper_player));
						?>
					
				<div class="clear"></div>
				<div class='titleNews'>���������</div>	
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$protector["img"], $protector["number"], $protector["name"],$protector["country"]);
						}
						while ($protector = mysql_fetch_array($protector_player));
						?>
						
				<div class="clear"></div>
				<div class='titleNews'>ϳ����������</div>	
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$midfielder["img"], $midfielder["number"], $midfielder["name"],$midfielder["country"]);
						}
						while ($midfielder = mysql_fetch_array($midfielder_player));
						?>	
						
				<div class="clear"></div>
				<div class='titleNews'>���������</div>	
					
						<?php
							do {
								printf ("<div class='coach'>
											<img src='%s' alt=''>
											<h4>%s</h4>
											<h4>%s</h4>	
											<p>%s</p>
										  </div>",$attacker["img"], $attacker["number"], $attacker["name"],$attacker["country"]);
						}
						while ($attacker = mysql_fetch_array($attacker_player));
						?>
			</div>
		</div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>