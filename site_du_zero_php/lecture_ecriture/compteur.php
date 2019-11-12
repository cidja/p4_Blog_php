<?php
// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');
$page_vues = fgets($monfichier); // on lit la première ligne

$page_vues++; // on augmente de 1 ce nombres de pages vues

fseek($monfichier, 0); //on remet le curseur au début

fputs($monfichier, $page_vues); //on écris de nouveau le nombre de pages vues

//3 : quand on a fini on le referme
fclose($monfichier);

echo "<p>cette page a été vue : ". $page_vues . " fois !</p>";

?>