<h2>Pour ajouter un jeu</h2>
<form method='post' action='ecriture.php'>
    <label for="nom">Nom du jeu</label><input type='text' name='nom' id='nom'/>
    <label for="possesseur">Possesseur</label><input type="text" name='possesseur' id='possesseur'/>
    <label for="console">Console : </label><input type="text" name='console' id='console'/>
    <label for="prix">Prix : </label><input type='text' name='prix' id='prix'/>
    <label for="nbre_joueurs_max">Nombre de joueurs maximum : </label><input type="number" name="nbre_joueurs_max" id="nbre_joueurs_max">
    <label for="commentaires">Commentaires : </label><input type='text' name="commentaires" id="commentaires"/>
    <input type='submit' value='ajouter'/>
</form>