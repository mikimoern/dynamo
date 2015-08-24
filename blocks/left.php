<div class="block">
	<div class="header">Команда</div>
	<div class="content">
		<nav>
			<div>
				<p>Перша команда</p>
				<div>
					<a <?php if (isset ($j)){
						if ($j==1) {
							echo "class='active'";
						}
					} ?> href="players.php">Гравці</a>
				</div>
				<div>
					<a <?php if (isset ($j)){
						if ($j==2) {
							echo "class='active'";
						}
					} ?> href="coach.php">Тренери</a>
				</div>
				<p>Динамо-2</p>
				<div>
					<a <?php if (isset ($j)){
						if ($j==3) {
							echo "class='active'";
						}
					} ?> href="junior_players.php">Гравці</a>
				</div>
				<div>
					<a <?php if (isset ($j)){
						if ($j==4) {
							echo "class='active'";
						}
					} ?> href="junior_coach.php">Тренери</a>
				</div>
			</div>
		</nav>
	</div>
</div>
<div class="block">
	<div class="header">Історія</div>
	<div class="content">
		<nav>
			<div>
				<a <?php if (isset ($j)){
						if ($j==5) {
							echo "class='active'";
						}
					} ?> href="achievement.php">Клубні досягнення</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==6) {
							echo "class='active'";
						}
					} ?> href="history_coaches.php">Легендарні наставники</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==7) {
							echo "class='active'";
						}
					} ?> href="gold_names.php">Золоті імена</a>
			</div>
		</nav>
	</div>
</div>
<div class="block">
	<div class="header">Клуб</div>
	<div class="content">
		<nav>
			<div>
				<a <?php if (isset ($j)){
						if ($j==8) {
							echo "class='active'";
						}
					} ?> href="management.php">Менеджмент</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==9) {
							echo "class='active'";
						}
					} ?> href="sponsors.php">Партнери</a>
			</div>
		</nav>
	</div>
</div>