<html>
    <head>
        <link type="text/css" rel="stylesheet" href="accueil2.css">
    </head>
    
    <?php include("header.php");
    ?> 
<a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/Recommencer/index.php"><?php$_GET?></a>
    <body>
        <?php
        if(isset($_GET["page"])){
            if ($_GET["page"]== 1){
                include("DevBlog-accueil2.php");
            }
            elseif ($_GET["page"]== 2){
                include("DevBlog-articles-liste2.php");
            }
            elseif ($_GET["page"]== 3){
                include("DevBlog-contact2.php");
            }
            elseif($_GET["page"]== contact-form){
                include("contact-form.php");
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
