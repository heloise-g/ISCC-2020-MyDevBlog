<!DOCTYPE html>
<html>
    <head>
        <title>Blog Héloïse GASPAIS-contact</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
    </head>
    <body>
        <div id="compte">
        <h2>Connectez-vous à votre compte !</h2>
        </div>
        <div id="formulaire">
            <form action="contact-form.php" method="post" enctype= "multipart/form-data">
                <div>
                    <label for="login"></label>
                    <input type="text" id="login" name="user_login" placeholder="Login">
                </div>
                <br/>
                <div>
                    <label for="password"></label>
                    <input type="text" id="password" name="user_password" placeholder="Mot de passe">
                </div>
                <br/>
                <div>
                    <button type="submit" id="button">Se connecter</button>
                 </div>
            </form>
        </div>
        <div id="creation-compte">
        <a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php?page=creation-compte">Créer un compte</a>
        </div>
    </body>
</html>