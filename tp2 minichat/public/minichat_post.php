<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=test','sudo','boby06');
}
catch(Exception $e)
{
    die('Erreur' . $e->getMessage());
}
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

$req = $bdd->prepare('INSERT INTO minichat(pseudo, message)
                     VALUES (:pseudo, :message)');
$req->execute(array('pseudo' => $pseudo,'message' => $message,))or die(print_r($req->errorInfo()));

//pour la redirection vers minichat
header('Location:minichat.php');
?>