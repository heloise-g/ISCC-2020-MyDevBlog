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
    $article = $request->fetch();?>

    <div class='titreaffichage'>
        <?php echo $article['titre'];?>
    </div>

    <br/><br/>

    <div class="art_image">
        <img src = <?= $article['image']?> widht=500 height=400>
    </div>

    <br/><br/>

    <div class='date'>
        <?php echo $article['date'];?></div>
    <br/><br/>

    <?php echo $article['contenu'];?>

    <br/><br/>

    <div class="auteur">
        <?php echo $article['auteur'];?>
    </div>
    
    <?php
}else{
    header('Location: articles.php');
}
?>
