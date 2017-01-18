<div class="row">
	<div class="col-sm-3">
		<div class="row">
		<?php 
		$dbh = new PDO('mysql:host=localhost;dbname=mecabilog', "root", "mc281284");
		$query = $dbh->query("SELECT categories FROM categories");
		$result = $query->fetchAll();
		foreach ($result as $row){?>
			<p><a id="<?php echo $row["categories"] ?>"><?php echo $row["categories"] ?></a><p>
		<?php } ?>
		</div>
	</div>
	<?php
		$dbh = new PDO('mysql:host=localhost;dbname=mecabilog', "root", "mc281284");
		$query = $dbh->query("SELECT membres.login, 
			categories.categorie, article.contenu 
			FROM membres, article, categories WHERE 
			membres.id_membre = article.id_membre 
			AND article.id_categorie = categories.id_categorie 
			ORDER BY article.date_a DESC");
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