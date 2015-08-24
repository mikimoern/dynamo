<!DOCTYPE HTML>
<html>
<head>
	<title>FC Dinamo Kiev</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="windows-1251">
	<link rel="shortcut icon" type="image/x-icon" href="images/logomin.png">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.bxslider').bxSlider({
				pager: false,
				auto: true,
				pause: 5000
			});
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<header>
			<? include ("blocks/header.php"); ?>
		</header>
		<div id="top">
			<? $i=3; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<? include ("blocks/left.php"); ?>
			</div>	
			<div id="center">
				<div id="slider">
					<ul class="bxslider">
					  <li><img src="images/slide1.jpg" alt="" /></li>
					  <li><img src="images/slide2.jpg" alt="" /></li>
					  <li><img src="images/slide5.jpeg" alt="" /></li>
					  <li><img src="images/slide4.jpg" alt="" /></li>
					</ul>
				</div>
				<h4>������ ������ ��� '����������'</h4>
				<article>
					<div id="newsStadium">
						<p>� ���������� ����� ����, ��� ������� ���������� ����, ������������ ���� � ��������� � ����� 
							�������� ���������� ������, ���� � 1996 ���� �� ����� "������������ ���������� �������� "����������". 
							���� ����������� �������� � ������ ��������� ����� � ���������� �����, ���������������� �������� �� 
							����������� ��������� ��� ��������.</p>
						<p>���� ���������� ������� ��������� ���� 12 ������ 1923 ����, ���� �� "��������� ������� ��. �. ���������" 
							���� ��������� ����� �������� ����� ������� �������. ������ ������� ��� ����������� ������� ��������� �.�.
							ϳ����������. ��� ������� � ������ ������ ����������� ����� ���������� ����. � ������ ������� ��������� 
							������� �� ������� �������, ��������� �� ������.</p>
						<p>�������� ����� ���������� ������� ������� ��������� ��������� ���-��������������� ����� �����, ����  
							1924 ���� ��� ��������� �������� ������� ��������. ���� ���� �������� ���������� ��������� ��������� 
							�������. � ������� ����� �� ���������� ���� ��������.</p>
						<p>����� "�������� ������ ��. �. ���������" ���� ��������� �� ������������� ���������� ���� ����. �������� ���� 
							� ������ �������� ������ �������� �� ������ ����. ��'� �. ��������� ( �������� (���������) ��� ��������� � 
							�������� ������ ��������� � �������� ��� ����, � 1926 ���� �� �������� ��������� ��������� � �������� 
							�� ���(�), � ��������� 1927 ���� � � ������ ��, �������� � ���� � ������ �� ��������) � ���� ������� 
							��������� ����� 1923 ����.</p>
						<p>� 1924 ���� �� ������� ���� ����� ����������� ��������� ���� 120�70 ����� � ��������� �����-����. 
							������� ����������� ��������� ���� ����������� ���� ������, � ����� ����� ����������� �� �����. ��� 
							��������� ������ ������� ��� �������.</p>			
						<p>� 1925 ���� �� ��������� ������� ��������� �������� ������ �� �������� ����. ��� ��������� �������� � 
							����������� �������� "������", � ����� ��������� �������� ������ ��������� - �������, ��������, 
							������������, ��������, ������, �����, ������ � �������, � ����� ������ �����������, �������������, ������� 
							�� ����.</p>					
						<p>������� ������������� ������������� ����������� ��������� "����������" ����������� � ������ 2008 ���� � 
							����� ���������  �� ���������� � ������ �������� ������� ��������� ������ 2012 ���� � �������.</p>		
					</div>
				</article>
				<div class="clear"></div>
			</div>
		</div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>