<html>
    <head>
        <title>Blog Héloïse GASPAIS-contact</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>

    <div id="compte">
    <h2>Créez votre article ! A vous de jouer !</h2>
    </div>

    <body>
        <form action="insertionArticles.php" method="post" enctype= "multipart/form-data">
            <p>Titre de l'article: <input type="text" id="titre" name="titre" placeholder="Titre"></p>
            <br/>
            <br/>
                <input type="file" id="image" name="image" placeholder="Image">
            <br/>
            <br/>
                <input type="text" id="date" name="date" placeholder="Date de publication">
            <br/>
            <br/>
                <input type="text" id="auteur" name="auteur" placeholder="Auteur">
            <br/>
            <br/>
                <textarea type="text" placeholder="Contenu" id="contenu" name="contenu" rows="20" cols="53"></textarea>
            <br/>
            <br/>
                <textarea type="text" placeholder="Extrait" id="extrait" name="extrait" rows="10" cols="33"></textarea>
            <br/>
            <br/>
                <button type="submit" id="button" name="publication">Publier</button>
        </form>
    </body>


</html>    

