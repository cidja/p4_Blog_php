<?php
function getPosts() //Sélection de tous les posts
{
    $db = dbConnect();
    $posts = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%y à %Hh%imin%ss') as 
            creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0,5");

    return $posts;
}

function getPost($postId) //pour ne sélectionner qu'un post
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

//Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");
        return $db;

    }
    catch(Exception $e)
    {
        die("Erreur: " . $e->getMessage());
    }
}