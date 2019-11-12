<?php
try{
    $bdd = new PDO("mysql:host=localhost;dbname=test; charset=utf8", "sudo", "boby06");
}
catch (Exception $e){
    die("Erreur : " .$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les requêtes mysql</title>
</head>
<body>
    <h2>Voici ma première requête mysql</h2>
<?php
$req = $bdd->prepare("SELECT nom, prix FROM jeux_video WHERE possesseur= ? AND prix<=? ORDER BY prix");
$req->execute(array($_GET["possesseur"], $_GET["prix_max"]));
while ($donnees = $reponse->fetch()){
    echo $donnees["possesseur"]; ?> possède le jeu,  <?php echo $donnees["nom"]. "<br/>"; 
}
$donnees = $reponse->fetch();
echo $donnees["console"];

$reponse->closeCursor();
?>
<h3>Pour insérer des données dans la base de données </h3>
<?php 
$reqinsert = $bdd->prepare("INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max, commentaires)
                           VALUES (:nom, :possesseur, :console, :prix, : nbre_joueurs_max, :commentaires)");
$reqinsert->execute(array(
    "nom" =>                $nom,
    "possesseur" =>         $possesseur,
    "console" =>            $console,
    "prix" =>               $prix,
    "nbre_joueurs_max" =>   $nbre_joueurs_max,
    "commentaires" =>       $commentaires
));
echo "le jeu a bient été ajouté";
?>
</body>
</html>