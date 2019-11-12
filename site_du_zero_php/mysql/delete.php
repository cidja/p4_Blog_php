<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=test','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$req = $bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');
echo 'le jeux a bien été supprimé';
?>