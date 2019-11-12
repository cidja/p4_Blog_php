<!DOCTYPE html>
    <html>
        <head>
            <title>PDO</title>
            <meta charset='utf-8'>
        </head>
    <body>
<?php
try
    {
    $bdd = new PDO ('mysql: host=localhost;dbname=test','root','root');    
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
$reponse = $bdd->query('SELECT nom, possesseur, console FROM jeux_video WHERE console="xbox" OR console="ps2" ORDER BY prix DESC LIMIT 0, 10');
echo "<p>Voici les 10 premiers jeux de la base de données : </p>";
while ($donnees = $reponse->fetch())
{
    echo $donnees['nom'] . "<br/>";
    
}
$reponse->closeCursor(); //termine le traitement de la requête
?>
</body>
</html>