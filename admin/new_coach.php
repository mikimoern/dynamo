<? include ("lock.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>������ �������</title>
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
					<div class='titleNews'>�������� �������</div>
					<div class="add">
						<form name="add_coach" action="add_coach.php" method="post">
							<div>
								<p><input type="text" name="position" id='position' placeholder="������" /></p>
								<p><input type="text" name="name" id='name' placeholder="��� �� ��������" /></p>
								<p><input type="text" name="country" id='country' placeholder="�����" /></p>
								<p><input type="text" name="img" id='img' placeholder="����������" /></p>
								<p>
									<label>������� ������� <br />
										<select name="team" >
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</label>
								</p>
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