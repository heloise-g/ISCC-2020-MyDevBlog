<?php

function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "mydevblog";
    try{
        $pdo = new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Yess connecté";
        return $pdo;

    }catch(PDOException $e) {
        echo "ERREUR $e";
        return False;
    }
}
?>
<?php
connect_to_database();
?>
