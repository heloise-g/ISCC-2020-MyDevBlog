<!DOCTYPE html>
<html>
    <head>
        <title>Blog Héloïse GASPAIS-articles</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>
    <body>
        <div class="phrase">
        <p><B>Les articles !</B></p>
        </div>

        <?php
            $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
            $sql = "SELECT * FROM articles ORDER BY date DESC";
            $request = $pdo->query($sql);
            while ($row = $request->fetch()){
                ?>
                <div class="liens_accueil">
                <li><a href="front.php?page=affichage&id=<?php echo $row['id']?>"><?php echo $row["titre"]?></a><br/><?php echo $row["extrait"]?></li><p></p>
                </div>
                <?php
            }
        ?>
       
    </body>
    
</html>