<!DOCTYPE html>
<html>
    <head>
        <title>Blog Héloïse GASPAIS-accueil</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
        
    </head>
    <body>
    
        <div id="description">
            <p>"L'élégance est une question de personnalité plus qus de vêtements" Jean-paul Gauthier. La mode est un univers personnel. Chacun se l'approprie à sa façon et s'exprime à travers. Plus qu'il n'y parait votre façon de vous habiller est le reflet de votre personnalité. Ce blog a pour objectif de partager et faire découvrir sa vision de la mode. Vous pourrez donc écrire vos propres articles. La plume est à vous !</p>
            <p>Ce blog a été créé par Héloïse GASPAIS (moi-même) avec l'aide de Pierre BROUARD, Matthieu CORREIA MOREIRA et Ismail HAOUAM.
            <p>Les 5 derniers articles !</p>
        </div>
        <?php
            $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
            $sql = "SELECT * FROM articles ORDER BY date DESC LIMIT 5";
            $request = $pdo->query($sql);
            while ($row = $request->fetch()){
        ?>
        <div class="article1">
            <li><a href="affichage.php?id=<?php echo $row['id']?>"><?php echo $row["titre"]?></a><br/><?php echo $row["extrait"]?></li>
        <div>
        <?php
        }
        ?>
    </body>
</html>