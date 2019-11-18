<?php

//source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4735685
require_once("model/ManagerDb.php"); // Appel de la classe ManagerDb.php Source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4744941-tirer-parti-de-lheritage#/id/r-4745131

class CommentManager extends ManagerDb 
{
    public function getComments($postId)
    {
    $db = $this->dbConnect(); //appel de $this S:https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744592
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
    }

    //fonction pour ajout d'un comentaire
    public function postComment($postId, $author, $comment) 
    {
        $db = $this->dbConnect(); //appel de $this S:https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744592
        $comments = $db->prepare("INSERT INTO comments(post_id, author, comment, comment_date)VALUES(?, ?, ?, NOW())");
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
        
    }
}