<?php
	include ("blocks/db_connect.php");
	$result = mysql_query ("SELECT title, quantity FROM achievement", $db);
	
	if (!$result) {
		echo "<p>������ �� ������. ��� ������:</p>";
		exit (mysql_error());
	}
	
	if (mysql_num_rows($result) > 0) {		
	$myrow = mysql_fetch_array($result);
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
			<? $i=1; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
					<div id="achievment">
						<?php
							do{
								printf ("<p>%s <span> %s</span></p>",$myrow["title"],$myrow["quantity"]);
							}
							while ($myrow = mysql_fetch_array($result));
						?>
					</div>
					<div class="clear"></div>
					<div id="contentNews">
						<article>
							<h1>������� ������</h1>
							<div id="logotip"></div>
							<h2>ó�� "������"</h2>
							<p>	�������, ��� ������, �������� ��������<br>
								� �������� ���� ������ �� ���,<br>
								�� ��������� ������� � ������� �� �<br>
								���������� ���, ����� �����.<br>
								� �������� ������� �����, � � ���<br>
								������� �� �����������, ��� ����� �������.<br>
								� ������ �� �������� ������� �������,<br>
								������ � ���� �������� ���� � ������<br>
								<br>
								����ϲ�<br>
								������-������ �-�-�!<br>
								������-������ �-�-�!<br>
								������-������ �-�-�!<br>
								������-������ �-�-�!<br>
								<br>
								��� ���� �� ������ ����� �����,<br>
								������� �������� ���� ������� ���,<br>
								����� ������ �� �� ����� � �������,<br>
								�, ��� ����� ������, ���� ����� �����.<br>
								�� ������� ���� ��� ������ �� ��� �<br>
								����� ��������, ���������, ��������� ����<br>
								� ������ ������, ����� ���� ��� ���,<br>
								����������� ������ ������ � ������� �����.<br>
								<br>
								����ϲ�<br>
								<br>
								����� ������� ������ �������� ������,<br>
								�� ��� ���� ������� ������ ���,<br>
								� �������� ������ ������ �� �����,<br>
								��� ������ � ������� �� ��������� ����.<br>
								� �����, ��� �������, ����� �������,<br>
								����� �����, � ����, � �������� ��,<br>
								������ ����� �������� � ��������� �����,<br>
								�, ����� ��� ����, �� ���������� �����.<br>
								<br>
								����ϲ�<br>
								<br>
								<span class="author">������: ������ ������</span><br>

								<span class="author">�����: ������� ���������</span>
							</p>
						</article>
					</div>	
				<div class="clear"></div>
			</div>
		</div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>