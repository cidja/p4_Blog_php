<?php
echo "Bonjour" . $_POST['nom']. '<br/>';
if (isset($_POST['mdp']) AND ($_POST['mdp'] == 'kangourou'))
{
    echo 'Bravo voici le code pour lancer la fusée : ZAFAFFSQ+ZAFZEGXC-AQSV-AFVDG-QSFZ';
}
else
{
    echo "Désolé le code est incorrect";
}
?>
