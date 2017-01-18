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

$register = "INSERT INTO membres (id_membre, nom, prenom, login, m_passe, mail) VALUES (:id_membre, :nom, :prenom, :login, :m_passe, :mail)";

$query = $db->prepare( $register );
$query->execute( array( ':id_membre'=>$id_membre, ':nom'=>$nom, ':prenom'=>$prenom, ':login'=>$login, ':m_passe'=>$m_passe, ':mail'=>$mail ) );

?>
