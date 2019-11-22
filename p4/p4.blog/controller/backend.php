<?php


//tous les appels de classes se font dans l'index.php

trait ToolsBackend{
    public static function listPosts()
    {
        $postManager = new PostManager(); //Création d'un objet
        $posts = $postManager->getPosts(); //Appel de la fonction de l'objet source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744655
        require("view/backend/listPostViewBackend.php"); // affiche la liste des billets
    }
    public static function updatePost($title,$content,$postId)
    {
        $postManager = new PostManager(); // Création d'un objet PostManager()
        $update = $postManager->updatePost($title,$content,$postId); // appel de la fonction de l'objet source
        require("view/backend");
    }
}