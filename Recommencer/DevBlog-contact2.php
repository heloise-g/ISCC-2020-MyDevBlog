<!DOCTYPE html>
<html>
    <head>
        <title>Blog Héloïse GASPAIS-contact</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil2.css">
    </head>
    <body>
        <div id="formulaire">
            <form action="contact-form.php" method="post" enctype= "multipart/form-data">
                <div>
                    <label for="name"></label>
                    <input type="text" id="name" name="user_name" placeholder="Nom et Prénom">
                </div>
                <div>
                    <label for="mail"></label>
                    <input type="email" id="mail" name="user_mail" placeholder="E-mail">
                </div>
                <div>
                    <label for="msg"></label>
                    <textarea id="msg" name="user_message" placeholder="Message"></textarea>
                </div>
                <div>
                    <button type="submit" id="button">Envoyer</button>
                 </div>
            </form>
        </div>
    </body>
</html>