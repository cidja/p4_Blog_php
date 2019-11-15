<?php

require_once("model/PostManager.php"); //appel de la classe PostManager require_once (une fois uniquement)
require_once("model/CommentManager.php"); //appel de la classe CommentManager require_once (une fois uniquement)

function listPosts()
{
    $postManager = new PostManager(); //Création d'un objet
    $posts = $postManager->getPosts(); //Appel de la fonction de l'objet source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744655
    require("view/frontend/listPostView.php"); // affiche la liste des billets
}
function post()
{
    $postManager = new PostManager(); // Création d'un objet
    $post = $postManager->getPost($_GET["id"]); // appel de la function getPost de l'objet PostManager (un seul post(billet))

    $commentManager = new CommentManager(); // Création d'un objet
    $comment = $commentManager->getComments($_GET["id"]); // appel de la function getComments de l'objet CommentManager (récupère les comments)

    require("view/frontend/postView.php"); //Affiche un post avec ses commentaires
}
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager(); // Création d'un objet

    $affectedLines = $commentManager->postComment($postId, $author, $comment); // appel de la fonction postComment de l'objet CommentManager

    if($affectedLines === false) {
        //Notre modèle arrête tout et affiche une erreur avec un  die . Il y a moyen de faire plus propre : 
        //jetons ici une exception, le code va s'arrêter là et l'erreur être remontée jusque dans le routeur qui contenait le bloc  try  !
        //source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4689546-gerer-les-erreurs#/id/r-4689802
        throw new Exception("Impossible d'ajouter le commentaire");
    }
    else { //Sinon on renvoi sur l'url index.php?action=post&id=5 par exemple pour le post avec l'id 5
        header("location: index.php?action=post&id=". $postId);
    }
}