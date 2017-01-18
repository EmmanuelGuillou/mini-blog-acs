<?php

session_start();

    $user = 'root';
    $pass = 'mc281284';

try{
    $dbh = new PDO('mysql:host=localhost;dbname=root', $user, $pass);
}

catch(PDOException $e) {
    echo $e->getMessage();
}

// gestion affichage des article sous le slider

    $liste_article = SELECT titre_article FROM article;
    $article_recent = SELECT titre_article FROM article WHERE max(date);
    $article_plus_lu = SELECT titre_article FROM article WHERE max(nombre_lu);
    $article_moins_lu = SELECT titre_article FROM article WHERE min(nombre_lu);

function article(){
    echo $liste_article;
}

function articlerecent(){
    echo $article_recent;
}

function articlepluslu(){
    echo $article_plus_lu;
}

function articlemoinslu(){
    echo $article_moins_lu;
}

article();
articlerecent();
articlepluslu();
articlemoinslu();

?>
