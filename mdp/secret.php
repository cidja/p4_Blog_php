<?php
$reponse = $_POST["mdp"];

if($reponse == "kangourou"){
    echo "Bienvenue jeune padawan tu as le code bravo";
}
else{
    echo "Mauvais mdp de passe retourne en arrière et essai de nouveau";
    ?>
    <a href="index.php">Pour réessayer</a><?php
}

?>