<head>
    <title>Blog Héloïse GASPAIS</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>  


<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $sql = "SELECT * FROM articles WHERE id=". $_GET['id'];
    $pdo = new PDO ("mysql:host=localhost; dbname=mydevblog", "root", "");
    $request = $pdo->prepare($sql);
    $request = $pdo->query($sql);
    $article = $request->fetch();
    echo $article['titre'];
    ?><br/><br/>
    <?php
    echo "<img src = " .$article['image'] . ">";?><br/><br/>
    <?php
    echo $article['date'];
    echo $article['auteur'];?><br/><br/>
    <?php
    echo $article['contenu'];
}else{
    header('Location: articles.php');
}
?>
