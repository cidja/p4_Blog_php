<?php

require("model.php");

function listPosts()
{
    $posts = getPosts(); //appel de la fonction getPosts de model.php
    require("indexView.php"); // affiche la liste des billets
}
function post()
{
    $post = getPost($_GET["id"]); // appel de la function getPost (un seul post(billet))
    $comment = getComments($_GET["id"]); // appel de la function getComments (récupère les comments)

    require("postView.php"); //Affiche un post avec ses commentaires
}