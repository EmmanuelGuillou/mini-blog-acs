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

// gestion affichage des articles sous le slider

    $article_recent = SELECT id_articles FROM articles WHERE max(date);
    $article_plus_lu = SELECT id_articles FROM articles WHERE max(nombre_lu);
    $article_moins_lu = SELECT id_articles FROM articles WHERE min(nombre_lu);

function articlerecent{
    echo $article_recent;
}

function articlepluslu{
    echo $article_plus_lu;
}

function articlemoinslu{
    echo $article_moins_lu;
}

?>
