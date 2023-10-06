
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"> <!-- Inclure votre fichier CSS -->
    <title>Votre titre</title>
</head>
<body>
    
<?php
     include 'vue/header.php';

    //import des ressources
    include './utils/bddConnexion.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/mvcpamier/':
            include './controller/controllerHome.php';
            break;
        case '/mvcpamier/addarticle':
            include './controller/controllerAddArticle.php';
            break;
        case '/mvcpamier/allarticle':
            include './controller/controllerAllArticle.php';
            break;
        case '/mvcpamier/updatearticle':
            include './controller/controllerUpdateArticle.php';
            break;
        default:
            include './controller/controller404.php';
            break;
    }
?>
</body>
</html>
