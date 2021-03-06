<?php
//tous les appels ce font directement dans le index.php
//source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4735685
//require_once("model/ManagerDb.php"); // Appel de la classe ManagerDb.php Source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4744941-tirer-parti-de-lheritage#/id/r-4745131

class CommentManager extends ManagerDb 
{
    public function getComments($postId)
    {
    $db = $this->dbConnect(); //appel de $this S:https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744592
    $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, "%d/%m/%Y à %Hh%imin%ss") AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
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
    public function signalComment($id) //fonction pour signaler un commentaire pour le faire remonter dans l'interface backend
    { //le but de la fonction est d'ajouter un TRUE sur la colonne signal de la table comments pour ensuite le faire remonter dans les signal sur le backend
        $db = $this->dbConnect(); //appel de $this S:https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735671-passage-du-modele-en-objet#/id/r-4744592
        $comments = $db->prepare("UPDATE comments SET `signal`=:signal WHERE id=:id");
        $signalComments = $comments->execute(array(
            "signal"        => 1,
            "id"            =>$id
        ));
        
        return $signalComments;
    }
}