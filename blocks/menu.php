<nav>
	<ul id="topmenu">
		<li>
			<a <?php if (isset ($i)){
				if ($i==1) {
					echo "class='active'";
				}
			} ?> href="index.php">Головна</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==2) {
					echo "class='active'";
				}
			} ?> href="news.php">Новини</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==3) {
					echo "class='active'";
				}
			} ?> href="stadium.php">НСК</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==4) {
					echo "class='active'";
				}
			} ?> href="tables.php">Турнірна таблиця</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==5) {
					echo "class='active'";
				}
			} ?> href="contacts.php">Контакти</a>	
		</li>
	</ul>
</nav>
<div id="search">
	<form name="search" action="view_search.php" method="post">
		<div>
			<input type="text" name="query" placeholder="Поиск" />
			<input type="submit" name="search" value="" />
		</div>
	</form>
</div>
