<nav>
	<ul id="topmenu">
		<li>
			<a <?php if (isset ($i)){
				if ($i==1) {
					echo "class='active'";
				}
			} ?> href="index.php">�������</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==2) {
					echo "class='active'";
				}
			} ?> href="news.php">������</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==3) {
					echo "class='active'";
				}
			} ?> href="stadium.php">���</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==4) {
					echo "class='active'";
				}
			} ?> href="tables.php">������� �������</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==5) {
					echo "class='active'";
				}
			} ?> href="contacts.php">��������</a>	
		</li>
	</ul>
</nav>
<div id="search">
	<form name="search" action="view_search.php" method="post">
		<div>
			<input type="text" name="query" placeholder="�����" />
			<input type="submit" name="search" value="" />
		</div>
	</form>
</div>
