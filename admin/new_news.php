<? include ("lock.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>��������� ������</title>
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
					<div class='titleNews'>�������� ������</div>
					<div class="add">
						<form name="add_news" action="add_news.php" method="post">
							<div>
								<p><input type="text" name="title" id='title' placeholder="�����" /></p>
								<p><input type="text" name="date" id='date' value="<?php $date = date("Y-m-d H:i:s"); echo $date; ?>" 
										  placeholder="���� (xxxx-xx-xx xx:xx:xx)" /></p>
								<p><input type="text" name="image" id='image' placeholder="����������" /></p>
								<p><input type="text" name="big_img" id='big_img' placeholder="���������� ��� ������" /></p>
								<p><textarea name="description" id='description' cols="80" rows="5" placeholder="�������� ���� (� ������)" ></textarea></p>
								<p><textarea name="text" id='text' cols="80" rows="15" placeholder="���� ������ (� ������)" ></textarea></p>
								<p><input type="submit" name="add_news" value="��������" /></p>
							</div>
						</form>
					</div>
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