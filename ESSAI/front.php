<html>
    <head>
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>
    
    <?php include("header.php");
    ?> 
<a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php"><?php$_GET?></a>
<fieldset class="navigation">
        <span>
        <a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php?page=1" class="liens"><B>Accueil</B></a>
        </span>
        <a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php?page=2" class="liens"><B>Articles</B></a>
        <a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php?page=3"class="liens"><B>Contact</B></a> 
</fieldset>

    <body>
        <?php
        if(isset($_GET["page"])){
            if ($_GET["page"]== 1){
                include("accueil.php");
            }
            elseif ($_GET["page"]== 2){
                include("articles.php");
            }
            elseif ($_GET["page"]== 3){
                include("contact.php");
            }
            elseif ($_GET["page"]== 4){
                include("connexion.php");
            }
            elseif ($_GET["page"]== "affichage"){
                include("affichage.php");
            }
            else {
                echo "ERREUR 404!" . "<br/>";
                echo "VOUS VOUS ETES PERDUS EN CHEMIN...";
            }
        }
        ?>
    </body>
    <?php include("footer.php");
    ?>
</html>