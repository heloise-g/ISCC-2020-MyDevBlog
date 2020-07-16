<head>
    <title>Blog Héloïse GASPAIS</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="accueil.css">
</head>  

<?php
session_start();
$_SESSION=array();
session_destroy();
header("location: http://localhost/ISCC/ISCC-2020-MyDevBlog/essai/front.php?page=connexion");
?>