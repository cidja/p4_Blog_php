<?php
require_once("Manager.php"); // Require manager to use database connection

function getPosts()
    {
        //request to display the last 5 posts with date in French format
        $db = dbConnect();
        $req = $db->query("SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/Y à %Hh%imin%ss') as 
        creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0,5");
        
        return $req;
        
    }

function getPost($postId)
{
    //request to display the post with the corresponding id passed as parameter with date in French format
    $db = dbConnect();
    $req = $db->prepare("SELECT SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/Y à %Hh%imin%ss') as 
    creation_date_fr FROM posts WHERE id= ?");
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
    

}

function getComments($postId)
{
    //request to retrieve all the comments of a post with date in French format
    $db = dbConnect();
    $comments = $db->prepare("SELECT id, author, comment, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%imin%ss')
    AS comment_date_fr from comments WHERE post_id = ? ORDER BY comment_date DESC");
    $comments->execute(array($postId));

    return $comments;
    
}

function postComment($postId, $author, $comment)
{
    //request to insert a comment with automatic datetime added
    $db= dbConnect();
    $comment = $db->prepare("INSERT INTO comments(post_id, author, comment,comment_date) VALUES
    posts_id, author, comment, NOW()");
    $affectedLines = $comment->execute(array(
        "posts_id"  => $postId,
        "author"    => $author,
        "comment"   => $comment
    ));

    return $affectedLines;
}

function dbConnect()
    {
        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");
        return $db;
    }