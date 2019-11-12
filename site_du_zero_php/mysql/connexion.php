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
    $bdd = new PDO ('mysql: host=localhost;dbname=test','root','root','SET NAMES utf8');    
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
$reponse = $bdd->query('SELECT * FROM jeux_video');
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
    <strong>Jeu : </strong> <?php echo $donnees['nom']; ?><br/>
    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>,
    et il le vend à : <?php echo $donnees['prix']; ?> euros !<br/>
    Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer
    à <?php $donnees['nbre_joueurs_max']; ?> au maximum<br/>
    
    <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur
    <?php echo $donnees['nom']; ?> : <em> <?Php echo $donnees['commentaires']; ?></em>
    </p>
    <?Php
}
$reponse->closeCursor(); //termine le traitement de la requête
?>
</body>
</html>