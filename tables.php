<?php
	include ("blocks/db_connect.php");
	$result = mysql_query ("SELECT * FROM tables", $db);
	
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
			<? $i=4; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="tables">
					<div class="titleNews">�������� �������</div>
					<h4>����'��-˳��, 2014 - 2015</h4>
					<table>
									<tr>
										<th>#</th>
										<th>�������</th>
										<th>�</th>
										<th>�</th>
										<th>�</th>
										<th>�</th>
										<th>�</th>
										<th>��</th>
										<th>�</th>
									</tr>
					<?php
						do {
							printf ("
									<tr>
										<td>%s</td>
										<td>%s</td>
										<td>%s</td>	
										<td>%s</td>	
										<td>%s</td>	
										<td>%s</td>	
										<td>%s</td>	
										<td>%s</td>	
										<td>%s</td>	
									</tr>",$myrow["id"],$myrow["team"], $myrow["game"], $myrow["win"], $myrow["draw"], 
											$myrow["defeat"], $myrow["goal"], $myrow["difference"], $myrow["point"]);
						}
						while ($myrow = mysql_fetch_array($result));	
					?>	
					</table>
					<article>
						<div id="tableInfo">
							<h4>������������ �����</h4>
								<p>� � ���� ��������� �������� �������� ���� ������� � �������. �������, �������� ������ �����, 
									������ ������������, ������� � �������� ����������� ������;</p>
								<p>� � ���� ������ �������� �������, �������� ����� � �������� �� ��������� � ���������� ����� 
									�������. ���� ���������� ����� ������� ����� ����� � ������� �� ���������, �� � ���� ������ 
									�������� �������, �������� ����� �����.</p>
							<h4>��������� � ��������� � ������</h4>
								<p>� �������-���� �������� �������, ������� ������ ��������� � ������������� ����� � ����������.</p>
								<p>� ���� ������� �� ��������� �� ������������ � ��� ���� ������ ����� ���� ��������������, 
									�� �� ����� �������� ������� �������� ������������� �����.</p>
								<p>� ��� ����� �� ������ ����, �������� ������ � ������ �����, ���������� � ������ ��� ������� 
									��������� ���.</p>
								<p>� ���� ������� ������ ����, �������� ���� �� ������ ���� ����, ���������� �� ������� � ��, 
									�� �� ����� �������� ������� �������� ��������� �����, �� �� ���� ����������.</p>
								<p>� � ������, ���� ��������� �������������� ����������� ��������, ������� � ������� ���������� 
									��������� �������������� ������� ��� ����������� �� ������������ ���.</p>
							<h4>������������� ���� � ��������� �������</h4>
								<p>� ��� ��������� ����� � ������ ������� �����������: 1) ������� ������� � ����������� �����; 
									2) ������� ���������� ������� �����.</p>
								<p>� ��� ��������� ��������������� ����������� ����������� �� �������� ����� �������, � ������: 
									1) ������� ���������� ����� � ����� ��������; 2) ������ ������� ������� � ����������� ����� 
									� ����� ��������; 3) ������� ���������� ������� ����� � ����� ��������; 4) ������ ������ � 
									�������� "������� ����" � ������ ���� ������.</p>
								<p>� ���� ��� ������� ������� ���������� ���������� ���������� ����� �� ���� ������, �� ������� 
									������� ������������ � ������� ����� ����� ����� ��������� �� ����������� ����.</p>
							<h4>������</h4>
								<p>� ����� �� ����������: ������������ �� ���� ����� ���� �� ������ ���� �����������, �� 
									������� ����������� ��������.</p>
								<p>� ����������� ���� � ������� ������� � 1 ���� �� 2 �������� � � 31 ������ �� 1 �����.</p>
						</div>
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