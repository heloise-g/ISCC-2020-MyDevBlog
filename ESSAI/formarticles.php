<head>
    <title>Blog Héloïse GASPAIS-contact</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>

<?php
    $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['publication'])){

        if(!empty($_POST['titre']) && !empty($_FILES['image']["tmp_name"]) && !empty($_POST['date']) && !empty($_POST['auteur']) && !empty($_POST['contenu']) && !empty($_POST['extrait'])){
            $sth = $pdo->prepare('INSERT INTO articles(titre, image, date, auteur, contenu, extrait)VALUES(?,?,NOW(),?,?,?)');
            $sth->execute (array($_POST['titre'], $_FILES['image']["tmp_name"], $_POST['auteur'], $_POST['contenu'], $_POST['extrait']));
            if($sth->rowCount()== 1){
                echo "Votre article a été publié !";
            }else{
                echo "Une erreur est survenue";
            }
        }else{
            echo "Il faut remplir tous les champs !";
        }
    }
?>
    <div id="compte">
    <h2>Créez votre article ! A vous de jouer !</h2>
    </div>

    <body>
        <form action="" method="post" enctype= "multipart/form-data">
            <p>Titre de l'article: <input type="text" id="titre" name="titre" placeholder="Titre"></p>
            <br/>
            <br/>
                <input type="file" id="image" name="image" placeholder="Image">
            <br/>
            <br/>
                <input type="date" id="date" name="date" placeholder="Date de publication">
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

