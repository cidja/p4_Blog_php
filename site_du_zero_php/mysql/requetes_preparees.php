<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=test','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prix ORDER BY prix');
$req->execute(array('possesseur' => $_GET['possesseur'], 'prix' => $_GET['prix_max'])) or die(print_r($req->errorInfo()));

echo '<ul>' ;
while ($donnees = $req->fetch())
{
    echo '<li>' . $donnees['nom']. ' (' . $donnees['prix'] . ' eur)</li>';
}
echo '</ul>';
 $req->closeCursor();
 ?>