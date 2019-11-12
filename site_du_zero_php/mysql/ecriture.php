<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=test','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


$nom= $_POST['nom'];
$possesseur=$_POST['possesseur'];
$console= $_POST['console'];
$prix = $_POST['prix'];
$nbre_joueurs_max = $_POST['nbre_joueurs_max'];
$commentaires = $_POST['commentaires'];

//Pour ajouter avec une requête préparée
$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires)
                     VALUES (:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
    'nom' => $nom,
    'possesseur' => $possesseur,
    'console' => $console,
    'prix' => $prix,
    'nbre_joueurs_max'=> $nbre_joueurs_max,
    'commentaires' => $commentaires
));
echo 'le jeu a bien été ajouté';

?>