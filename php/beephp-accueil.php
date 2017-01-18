<?php

session_start();

    $user = 'root';
    $pass = 'mc281284';

try{
    $dbh = new PDO('mysql:host=localhost;dbname=root', $user, $pass);

    article();
    articlerecent();
    articlepluslu();
    articlemoinslu();
}

catch(PDOException $e) {
    echo $e->getMessage();
}

// gestion affichage des article sous le slider

    $liste_article = "SELECT titre_article FROM article";
    $article_recent = "SELECT titre_article, max(date_a) FROM article";
    $article_plus_lu = "SELECT titre_article, max(nombre_lu)FROM article";
    $article_moins_lu = "SELECT titre_article, min(nombre_lu) FROM article";

function article(){
    echo $liste_article;
}

function articlerecent(){
    $article_image = "SELECT url_img FROM article WHERE $article_recent = titre_article";
    echo $article_recent;
    echo $article_image;
}

function articlepluslu(){
    $article_image = "SELECT url_img FROM article WHERE $article_recent = titre_article";
    echo $article_plus_lu;
    echo $article_image;
}

function articlemoinslu(){
    $article_image = "SELECT url_img FROM article WHERE $article_recent = titre_article";
    echo $article_moins_lu;
    echo $article_image;
}

?>
