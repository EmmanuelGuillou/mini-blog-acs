<?php

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

    $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', $user, $pass);
    //$dbh =query 'SET NAMES utf8'


    $form = $_POST;

    $id_commentaire = '';
    $login = $form[ 'login_comm' ];
    $commentaire = $form[ 'commentaire' ];
    $date_c = date("Y-m-d");
    $id_article = '';
    $query = $dbh->query("SELECT id_membre FROM membres WHERE login = '$login'");
    $res = $query->fetchAll();

if (count($res) > 0) {
    foreach($res as $id_member){

        $add_comm = "INSERT INTO commentaires (id_commentaire, id_membre, date_c, id_article, commentaire) VALUES (:id_commentaire, :id_membre, :date_c, :id_article, :commentaire)";

        $query = $dbh->prepare( $add_comm );
        $query->execute( array( ':id_commentaire'=>$id_commentaire, ':id_membre'=>$id_member["id_membre"], ':date_c'=>$date_c, 'id_article'=>$id_article, ':commentaire'=>$commentaire ) );
    }
}

?>
