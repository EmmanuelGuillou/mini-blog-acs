<?php

session_start();

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

    try {
      $dbh = new PDO('mysql:host=localhost;dbname=mathieuc', "mathieuc", "U9YDV9eNf5");
     } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
     }

catch(PDOException $e) {
    echo $e->getMessage();
}

$form = $_POST;
$id_membre = '';
$nom = '';
$prenom = '';
$login = $form[ 'login' ];
$m_passe = $form[ 'm_passe' ];
$mail = $form[ 'mail' ];

$register = "INSERT INTO membres (id_membre, nom, prenom, login, m_passe, mail) VALUES (:id_membre, :nom, :prenom, :login, :m_passe, :mail)";

$query = $dbh->prepare( $register );
$query->execute( array( ':id_membre'=>$id_membre, ':nom'=>$nom, ':prenom'=>$prenom, ':login'=>$login, ':m_passe'=>$m_passe, ':mail'=>$mail ) );

?>
