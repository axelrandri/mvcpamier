<?php
    $error ="";
    $articles = [];
    include './model/article.php';
    //logique :
    //sticker le résultat de la fonction getAllArticle() dans la variable articles (tableau)
    //tester si on à des articles (variable articles si elle est différent de vide)
    if (!empty(getAllArticle($bdd))) {
        //stocker les articles dans la variables $articles (tableau)
        $articles = getAllArticle($bdd);
        //tester si on à aucun articles
    } else {
        //afficher un message d'erreur
        $error = "Aucun article n'a été publiée.";

    }
    include './vue/allArticle.php';