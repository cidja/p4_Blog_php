<?php
    //tous les appels de classes se font dans l'index.php

    trait ToolsBackend{
        // Fonction pour lister les posts
        public static function listPosts()
        {
            $postManager = new PostManager(); //Création d'un objet
            $posts = $postManager->getPosts(); //Appel de la fonction de l'objet source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744655
            require("view/backend/listPostViewBackend.php"); // affiche la liste des billets
        }

        public static function getPost() //affiche un post unique
        {
            $postManager = new PostManager(); // Création d'un objet
            $post = $postManager->getPost($_GET["id"]); // appel de la function getPost de l'objet PostManager (un seul post(billet))
        
            require("view/backend/postViewBackend.php"); //Affiche un post avec ses commentaires
        }

        public static function getPostForUpdate() //affiche un post pour un update
        {
            $postManager = new PostManager(); // Création d'un objet
            $post = $postManager->getPost($_GET["id"]); // appel de la function getPost de l'objet PostManager (un seul post(billet))

            require("view/backend/updateViewBackend.php");
        }

        //fonction pour créer un post
        public static function createPost($title,$content)
        {
            $postManager = new PostManager(); // Créatoin d'un objet PostManager();
            $createPost = $postManager->createPost($title, $content); // Appel de la fonction de l'objet source
            
        }

        //fonction pour updater les posts 
        public static function updatePost($title,$content,$postId)
        {
            $postManager = new PostManager(); // Création d'un objet PostManager()
            $update = $postManager->updatePost($title,$content,$postId); // appel de la fonction de l'objet source
            
        }

        //fonction pour supprimer un post
        public static function deletePost($postId)
        {
            $postManager = new PostManager(); // Création d'un objet PostManager()
            $delete = $postManager->deletePost($postId); // Appel de la méthode deletePost de l'objet PostManager
        }
        
    }
