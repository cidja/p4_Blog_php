<!DOCTYPE html>
    <html>
        <head>
        <title>Minichat</title>
        <link rel='stylesheet' href="style.css"/>
        <meta charset='utf-8'/>
        </head>
  <body>
<h1>Bienvenue sur le chat</h1>

    <form method='post' action='minichat_post.php' id='formulaire'>
        <label for='pseudo'>Pseudo</label><input type='text' id='pseudo' name='pseudo' placeholder='rentre ton pseudo ici' autofocus/></br>
        <label for='message'>Votre message</label><input type='text' id='message' name='message' placeholder="c'est par ici pour écrire"/><br>
        <input type='submit' value='valider'/>
    </form>
    
<p id="resultat">
<?php
try
{
    $bdd= new PDO('mysql:host=localhost;dbname=test','sudo','boby06');
}
catch (Exception $e)
{
    die('Erreur' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM minichat ORDER BY id');
while($donnees = $reponse->fetch())
      {
       echo $donnees['pseudo'] . '  : ' . $donnees['message'] . '<br/><br/>';
      }
?>
</p>
    </body>
</html>