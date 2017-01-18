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

?>
