<?php

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

    $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', $user, $pass);
    //$dbh =query 'SET NAMES utf8'


    $form = $_POST;
    $login = $form[ 'login_comm' ];
    $commentaire = $form[ 'commentaire' ];
    $date_c = date("Y-m-d");
    $id_membre = $dbh->query("SELECT id_membre FROM membres WHERE login = '$login'");

    $add_comm = "INSERT INTO commentaires (id_membre, date_c, commentaire) VALUES (:id_membre, :date_c, :commentaire)";

    $query = $dbh->prepare( $add_comm );
    $query->execute( array( ':id_membre'=>$id_membre, ':date_c'=>$date_c, ':commentaire'=>$commentaire ) );

foreach()

?>
