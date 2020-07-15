<head>
    <title>Blog Héloïse GASPAIS</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>  

<?php
session_start();
$_SESSION=array();
session_destroy();
header("Location: connexion.php");
?>