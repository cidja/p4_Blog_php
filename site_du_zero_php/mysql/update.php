<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=test','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
/*Sans requête préparée mais il vaut mieux toujours faire une requête préparée
$req = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\'  WHERE possesseur = \'Michel\'')
or die(print_r($bdd->errorInfo()));
echo $req . 'entrées ont été modifiées !';*/
$req = $bdd->prepare('UPDATE jeux_video SET prix = nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
    'nvprix' => $nvprix,
    'nv_nb_joueurs' => $nv_nb_joueurs,
    'nom_jeu' =>  $nom_jeu    
));
?>