<head>
    <title>Blog Héloïse GASPAIS-contact</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>

<?php  
class article # Déclaration de la classe
{
    public $pdo;
    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost; dbname=mydevblog", "root", ""); #connexion à la base de donnée
 
 
    }
}
public function nouvel_article($titre, $image, $date, $auteur, $contenu, $extrait) {
         
}