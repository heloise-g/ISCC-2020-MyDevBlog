<head>
        <title>Blog Héloïse GASPAIS-contact</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="accueil.css">
</head>

<?php
session_start();
$pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["connexion"])){
    $user_login = htmlspecialchars($_POST['user_login']);
    $user_password= $_POST['user_password'];

    if(!empty('user_login') && !empty('user_password')){
        $requser = $pdo->prepare('SELECT * FROM utilisateurs WHERE user_login = :user_login AND user_password = :user_password');
        $requser->execute(array(':user_login' => $user_login,':user_password' =>  $user_password));
        echo $requser->fetch();
        $userexist = $requser->rowCount();
        if($userexist == 1){
            $userinfo = $requser->fetch();
            $_SESSION ['id'] = $userinfo['id'];
            $_SESSION ['login'] = $userinfo['login'];
            header("location: vipaccueil.php");
        } else{
            echo "Mauvais login ou password";
        }
    } else{
        echo "Tous les champs doivent être remplis !";
    }
}
?>


<div id="compte">
<h2>Connectez-vous à votre compte !</h2>
</div>
<div id="formulaire">
    <form action="" method="post" enctype= "multipart/form-data">
            <input type="text" id="login" name="user_login" placeholder="Nom d'utilisateur">
        <br/>
        <br/>
            <input type="password" id="password" name="user_password" placeholder="Mot de passe">
        <br/>
        <br/>
            <button type="submit" id="button" name="connexion">Se connecter</button>
    </form>
</div>
<div id="creation-compte">
<a href="http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php?page=creation-compte">Créer un compte</a>
</div>
