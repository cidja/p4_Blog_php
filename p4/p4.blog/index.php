<?php //deviens notre routeur 
//source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4682351-creer-un-routeur#/id/r-4682481
require("controller/controller.php");

if(isset($_GET["action"])){
    if($_GET["action"] == "listPosts"){ //si dans l'url action = listPosts on appel listPosts du controller
        listPosts();
    }
    elseif ($_GET["action"] == "post"){
        if(isset($_GET['id']) && $_GET["id"] > 0){ //Si dans l'url action = post on appel post du controller
            post();
        }
    }
}
else{
    listPosts(); //appel de listPosts() liste des posts
}

/*
    On charge le fichier controller.php (pour que les fonctions soient en mémoire, quand même !).

    On teste le paramètre action pour savoir quel contrôleur appeler. Si le paramètre n'est pas présent, 
    par défaut on charge la liste des derniers billets (ligne 16). C'est comme ça qu'on indique ce que doit 
    afficher la page d'accueil du site.

    On teste les différentes valeurs possibles pour notre paramètre action et on redirige vers le bon contrôleur à chaque fois.

*/