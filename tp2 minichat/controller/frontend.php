<?php

require("project/model/frontend.php");

function listPosts()
{
    $posts = getPosts();

    require("public/frontend/view/listPostView.php");
}

function post()
{
    $post = getPost($_GET["id"]);
    $comments = getComments($_GET["id"]);

    require("public/frontend/view/listPostView.php");
}

function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);

    if($affectedLines === false) {
        die("Impossible d'ajouter le commentaire !");
    }
    else{
        header("Location: ../../index.php?action=post&id=".$postId); //Si ok on renvoi vers la page d'accueuil
    }
}