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
	<?php
		$dbh = new PDO('mysql:host=localhost;dbname=mecabilog', "root", "mc281284");
		$query = $dbh->query("SELECT * FROM membres, article, categories, commentaires WHERE membres.id_membre = article.id_membre
		AND article.id_categorie = categories.id_categorie AND article.id_article = commentaires.id_article");
		$result = $query->fetchAll(); 
	?>	
	<?php foreach ($result as $row){?>
		<div class="col-sm-9">
			<div class="row">
				<div class="col-sm-1">
					<img src="<?php echo $row["avatar"]?>"/>
				</div>
				<div class="col-sm-7">
					<div><?php echo $row["image"] ?></div>
				</div>
			</div>
			<div class="row">
				<div><?php echo $row["article"] ?></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-sm-offset-7"></div>
		</div>
	<?php } ?>
</div>