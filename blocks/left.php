<div class="block">
	<div class="header">�������</div>
	<div class="content">
		<nav>
			<div>
				<p>����� �������</p>
				<div>
					<a <?php if (isset ($j)){
						if ($j==1) {
							echo "class='active'";
						}
					} ?> href="players.php">������</a>
				</div>
				<div>
					<a <?php if (isset ($j)){
						if ($j==2) {
							echo "class='active'";
						}
					} ?> href="coach.php">�������</a>
				</div>
				<p>������-2</p>
				<div>
					<a <?php if (isset ($j)){
						if ($j==3) {
							echo "class='active'";
						}
					} ?> href="junior_players.php">������</a>
				</div>
				<div>
					<a <?php if (isset ($j)){
						if ($j==4) {
							echo "class='active'";
						}
					} ?> href="junior_coach.php">�������</a>
				</div>
			</div>
		</nav>
	</div>
</div>
<div class="block">
	<div class="header">������</div>
	<div class="content">
		<nav>
			<div>
				<a <?php if (isset ($j)){
						if ($j==5) {
							echo "class='active'";
						}
					} ?> href="achievement.php">����� ����������</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==6) {
							echo "class='active'";
						}
					} ?> href="history_coaches.php">��������� ����������</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==7) {
							echo "class='active'";
						}
					} ?> href="gold_names.php">����� �����</a>
			</div>
		</nav>
	</div>
</div>
<div class="block">
	<div class="header">����</div>
	<div class="content">
		<nav>
			<div>
				<a <?php if (isset ($j)){
						if ($j==8) {
							echo "class='active'";
						}
					} ?> href="management.php">����������</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==9) {
							echo "class='active'";
						}
					} ?> href="sponsors.php">��������</a>
			</div>
		</nav>
	</div>
</div>