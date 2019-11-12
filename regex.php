<?php
$test = "j'aime jouer de la piano";
//un regex se trouve entouré de délimitateurs #
if(preg_match("#Guitare|piano#", $test))
{
    echo "VRAI";
}
else
{
    echo "FAUX";
}

echo "<br/>on veuille que la phrase commence ou se termine par ce mot.<br/>";
$test2 = "Bonjour petit zéro";
if(preg_match("#zé[rb]o$#", $test2))
{
    echo "VRAI";
}
else
{
    echo "FAUX";
}
?>