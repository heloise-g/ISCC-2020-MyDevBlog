<!DOCTYPE html>
<html>
    <head>
        <title>Blog Héloïse GASPAIS-articles</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>
    <body>
        <p>Les articles !</p>

        <div class="article1">
        <?php
            $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
            $sql = "SELECT * FROM articles ORDER BY date DESC";
            $request = $pdo->query($sql);
            while ($row = $request->fetch()){
                ?>
                <li><a href="front.php?page=affichage&id=<?php echo $row['id']?>"><?php echo $row["titre"]?></a><br/><?php echo $row["extrait"]?></li>
                <?php
            }
        ?>
        </div>
       
    </body>
    
</html>