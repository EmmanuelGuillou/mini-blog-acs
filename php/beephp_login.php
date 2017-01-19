<?php

session_start();

    $user = 'mathieuc';
    $pass = 'U9YDV9eNf5';

try{
    $dbh = new PDO("mysql:host=localhost;dbname=mathieuc", $user, $pass);
}

catch(PDOException $e) {
    echo $e->getMessage();
}

?>
