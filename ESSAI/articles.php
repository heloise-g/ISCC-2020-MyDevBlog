<!DOCTYPE html>
<html>
    <head>
        <title>Blog Héloïse GASPAIS-articles</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>
    <body>
        <p>Lister tous les articles</p>

        <?php
            $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $articles = getArticles($id);
                foreach($articles as $article){
                    echo "$article->titre";
                    "<br/>";
                    echo "$article->auteur";
                    "<br/>";
                    echo "$article->image";
                    "<br/>";
                    echo "$article->extrait";
                }
            }else{
                echo "problème";
            }
        ?>

        <?php
        $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $historique_commandes = array ('5.49','9.99', '5.49', '15.99','25');

        function afficher_commandes($historique_commandes){
            foreach($historique_commandes as $historique_commande){
                echo "Une commande de ";
                echo $historique_commande;
                echo "euros a été reçus." . "<br/>";
            }
            echo "Le total des commandes est de ";
            echo array_sum($historique_commandes);
            echo " euros.";
        }
    ?>
    <?php
    afficher_commandes($historique_commandes)
    ?>

    </body>
    
</html>