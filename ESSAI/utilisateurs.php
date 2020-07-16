<?php
    try {
            
        $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<ul>";
    foreach($pdo->query("SELECT * from utilisateurs") as $row){
        echo "<li>";
        echo ($row ["1"]);
        echo "</li>";
        echo "</ul>";
    }
    return $pdo;

    } catch(PDOExcpetion $e){
        echo "Connection failed: ". $e->getMessage();
    }
?>
