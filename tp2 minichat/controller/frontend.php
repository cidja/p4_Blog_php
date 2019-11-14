<?php
//Chargement des classes 
require_once("../model/PostManager.php");
require_once("../model/CommentManager.php");



function listPosts()
{
    $postManager = new PostManager(); //Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require("public/frontend/view/listPostView.php");
}

function post()
{
    $postManager = new PostManager(); //Création de l'objet 
    $commentManager = new CommentManager(); // Création de l'objet

    $post = $postManager->getPost($_GET["id"]); // Appel d'une fonction de cet objet
    $comments = $commentManager->getComments($_GET["id"]); // Appel d'une fonction de cet objet

    require("public/frontend/view/listPostView.php");
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager(); // Création de l'objet

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if($affectedLines === false) {
        die("Impossible d'ajouter le commentaire !");
    }
    else{
        header("Location: ../../index.php?action=post&id=".$postId); //Si ok on renvoi vers la page d'accueuil
    }
}