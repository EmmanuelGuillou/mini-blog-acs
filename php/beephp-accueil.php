<?php

session_start();

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

    try {
      $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5");
      articlerecent();
      articlepluslu();
      articlemoinslu();
      article();
     } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }

// gestion affichage des article sous le slider

    $liste_article = "SELECT titre_article FROM article";
    $article_recent = "SELECT titre_article, max(date_a) FROM article";
    $article_plus_lu = "SELECT titre_article, max(nombre_lu) FROM article";
    $article_moins_lu = "SELECT titre_article, min(nombre_lu) FROM article";

function articlerecent(){
    $article_image = "SELECT url_img FROM article WHERE $article_recent = titre_article";?>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <?=$article_recent;?>
            <?=$article_image;?>
        </div>
<?php }

function articlepluslu(){
    $article_image = "SELECT url_img FROM article WHERE $article_recent = titre_article";?>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <?=$article_plus_lu;?>
            <?=$article_image;?>
        </div>
<?php }

function articlemoinslu(){
    $article_image = "SELECT url_img FROM article WHERE $article_recent = titre_article";?>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <?=$article_moins_lu;?>
            <?=$article_image;?>
        </div>
    </div>
<?php }

function article(){?>
    <div class="row">
        <?=$liste_article;?>
    </div>
<?php}

?>
