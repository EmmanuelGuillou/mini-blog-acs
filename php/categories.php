<div class="row">
	<div class="col-sm-3">
		<div class="row">
		<?php 
		$dbh = new PDO('mysql:host=localhost;dbname=mecabilog', "root", "mc281284");
		$query = $dbh->query("SELECT categories FROM categories");
		$result = $query->fetchAll();
		foreach ($result as $row){?>
			<p><?php echo $row["categories"] ?><p>
		<?php } ?>
		</div>
	</div>
	<div class="col-sm-9">
		<?php
			$dbh = new PDO('mysql:host=localhost;dbname=mecabilog', "root", "mc281284");
			$query = $dbh->query("SELECT membres.avatar FROM membres, article WHERE membres.id_membre = article.id_membre");
			$result = $query->fetchAll();
		?>
	</div>
</div>