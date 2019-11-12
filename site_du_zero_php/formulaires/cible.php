<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé tu t'appelle
<?php echo  htmlspecialchars($_POST['prenom']); ?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">Clique ici</a>
pour revenir à la page de choix du prénom (formulaire.php).<br/></p>
<p>Je sais que tu as fait le <?php echo $_POST['choix']; ?></p>

<?php
if (isset($_POST['case']))
{
    echo "merci d'avoir coché ma case ! :)";
}
else
{
    echo "pourquoi tu n'as pas coché la case<br/>";
}
if ($_POST['frites']== "oui")
{
    echo 'tu as raison tous le monde aime les frites !<br/>';
}
else
{
    echo "comment tu ne peux pas aimer les frites c'est trop bon !!!<br/>";
}
?>