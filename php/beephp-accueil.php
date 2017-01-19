<?php

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

try {
  $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5");

  //affichage des articles
  articlerecent($dbh);
  articlepluslu($dbh);
  articlemoinslu($dbh);
  article($dbh);
 }

 catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}

// gestion affichage des article sous le slider
function articlerecent($dbh){
    $article_recent = "SELECT titre_article, url_img FROM article WHERE date_a = (SELECT  MAX(date_a) FROM article)"; //Va chercher l'article le plus récent
    foreach ($dbh->query($article_recent) as $row){ ?>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <?php print $row['titre_article']?>
            <img src="<?php print $row['url_img'];?>" style="width: 100px;"/>
        </div>
<?php }
}

function articlepluslu($dbh){
    $article_plus_lu = "SELECT titre_article, url_img FROM article WHERE nombre_lu = (SELECT MAX(nombre_lu) FROM article)"; //Va chercher l'article le plus lu
    foreach ($dbh->query($article_plus_lu) as $row){ ?>
        <div class="col-md-4 col-sm-12">
            <?php print $row['titre_article'];?>
            <img src="<?php print $row['url_img'];?>" style="width: 100px;"/>
        </div>
<?php }
}

function articlemoinslu($dbh){
    $article_moins_lu = "SELECT titre_article, url_img FROM article WHERE nombre_lu = (SELECT MIN(nombre_lu) FROM article)"; //Va chercher l'article le moins lu
    foreach ($dbh->query($article_moins_lu) as $row){ ?>
        <div class="col-md-4 col-sm-12">
            <?php print $row['titre_article'];?>
            <img src="<?php print $row['url_img'];?>" style="width: 100px;"/>
        </div>
    </div>
<?php }
}

function article($dbh){
    $liste_article = "SELECT titre_article FROM article";
    foreach ($dbh->query($liste_article) as $row){ ?>
    <div class="row">
        <?php print $row['titre_article'];?>
    </div>
<?php }
} ?>
