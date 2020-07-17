<head>
    <title>Blog Héloïse GASPAIS-contact</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>

    <?php
    $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['contact'])){

        if(!empty($_POST['user_name']) && !empty($_POST['user_mail']) && !empty($_POST['user_message'])){
            $sth = $pdo->prepare('INSERT INTO message(user_name, user_mail, user_message)VALUES(?,?,?)');
            $sth->execute (array($_POST['user_name'], $_POST['user_mail'], $_POST['user_message']));
            if($sth->rowCount()== 1){
                echo "Votre message a bien été envoyé !";
            }else{
                echo "Une erreur est survenue";
            }
        }else{
            echo "Il faut remplir tous les champs !";
        }
    }
    ?>
<body>
    <h3>Un message à nous transmettre ? C'est ici !</h3>
    <div id="formulaire">
        <form action="" method="post" enctype= "multipart/form-data">
                <input type="text" id="name" name="user_name" placeholder="Nom et Prénom">
            <br/>

                <input type="email" id="mail" name="user_mail" placeholder="E-mail">
            <br/>

                <textarea id="msg" name="user_message" placeholder="Message" rows="10" cols="33"></textarea>
            <br/>
            <br/>

                <button type="submit" id="button" name="contact">Envoyer</button>
        </form>
    </div>
</body>
