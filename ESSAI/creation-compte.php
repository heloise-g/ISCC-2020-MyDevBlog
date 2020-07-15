<head>
    <title>Blog Héloïse GASPAIS</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>  
        
<?php
session_start();
    try{
        $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    if(isset($_POST['inscription'])){
        $user_name = htmlspecialchars($_POST['user_name']);
        $user_prenom = htmlspecialchars($_POST['user_prenom']);
        $user_login = htmlspecialchars($_POST['user_login']);
        $user_password = sha1($_POST['user_password']);
        $user_password2 = sha1($_POST['user_password2']);
        
        if(!empty($_POST['user_name']) && !empty($_POST['user_prenom']) && !empty($_POST['user_login']) && !empty($_POST['user_password']) && !empty($_POST['user_password2'])){
            if($_POST['user_password'] == $_POST['user_password2']){
                $sth = $pdo->prepare('INSERT INTO utilisateurs(user_name, user_prenom, user_login, user_password)VALUES(?,?,?,?)');
                $sth->execute (array($_POST['user_name'], $_POST['user_prenom'], $_POST['user_login'], $_POST['user_password']));
                if($sth->rowCount()== 1){
                    echo "Vous êtes maintenant connectés !!";
                }
            }else{
                echo "les mots de passe ne correpsondent pas...";
            }
        }else{
            echo "Il faut remplir tous les champs !";
        }
    }
?>

<div id="compte">
    <h2>Rejoignez-nous !</h2>
</div>

<div id="formulaire">
<form action="" method="post" enctype= "multipart/form-data">
        <input type="text" id="name" name="user_name" placeholder="Nom">
    <br/>
    <br/>
        <input type="text" id="prenom" name="user_prenom" placeholder="Prénom">
    <br/>
    <br/>
        <input type="text" id="login" name="user_login" placeholder="Nom d'utilisateur">
    <br/>
    <br/>
        <input type="password" id="password" name="user_password" placeholder="Mot de passe">
    <br/>
    <br/>
        <input type="password" id="password" name="user_password2" placeholder="Répétez le mot de passe">
    <br/>
    <br/>
        <button type="submit" id="button" name="inscription">S'inscrire</button>
</form>
</div>