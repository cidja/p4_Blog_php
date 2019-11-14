<?php
function getPosts() //Sélection de tous les posts
{
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");

    }
    catch(Exception $e)
    {
        die("Erreur: " . $e->getMessage());
    }

    $req = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%y à %Hh%imin%ss') as 
            creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0,5");

    return $req;
}

function getPost($postId) //pour ne sélectionner qu'un post
{
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");

    }
    catch(Exception $e)
    {
        die("Erreur: " . $e->getMessage());
    }
    $req = $db->prepare("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%y à %Hh%imin%ss') 
    as creation_date_fr FROM posts WHERE id = ?");
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");

    }
    catch(Exception $e)
    {
        die("Erreur: " . $e->getMessage());
    }
    $req = $db->prepare("SELECT id, author, comment, DATE_FORMAT(comment_date, '%d/%m/%y à %Hh%imin%ss')
    as comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC");
}