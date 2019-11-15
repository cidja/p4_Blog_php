<?php
/*Mis dans PostManager
function getPosts() //Sélection de tous les posts
{
    $db = dbConnect();
    $posts = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%y à %Hh%imin%ss') as 
            creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0,5");

    return $posts;
}
*/

/*Mis dans PostManager
function getPost($postId) //pour ne sélectionner qu'un post
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}
*/
/*Mis dans CommentManager.php
//fonction qui affiche les commentaires d'un post
function getComments($postId)
{
    $db= dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}
*/
/*/*Mis dans CommentManager.php
//fonction pour ajout d'un comentaire
function postComment($postId, $author, $comment) 
{
    $db = dbConnect();
    $comments = $db->prepare("INSERT INTO comments(post_id, author, comment, comment_date)
    VALUES (?, ?, ?, NOW()");
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}
*/
//Nouvelle fonction qui nous permet d'éviter de répéter du code

/* Mis dans ManagerDb.php
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
*/