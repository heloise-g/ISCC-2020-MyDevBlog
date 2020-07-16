<html>
    <head>
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>
    
    <?php include("header.php");
    ?> 
<a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/back.php"><?php$_GET?></a>
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
            if ($_GET["page"]== "creation-compte"){
                include("creation-compte.php");
            }
            elseif ($_GET["page"]== "vipaccueil"){
                include("vipaccueil.php");
            }
            elseif ($_GET["page"]== "deconnexion"){
                include("deconnexion.php");
            }
            elseif ($_GET["page"]== "formarticles"){
                include("formarticles.php");
            }
            elseif ($_GET["page"]== "utilisateurs"){
                include("utilisateurs.php");
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