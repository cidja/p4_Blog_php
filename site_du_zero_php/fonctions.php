<?php
$phrase = "Bonjour, je suis une phrase avec plein de mots à l'intérieur combien d'après vous ?<br/>";
$longueur= strlen($phrase);

echo "la phrase ci dessous contient : ". $longueur . " caractères<br/>". $phrase;


//pour remplacer des mots par d'autres en premier le mot que l'on veut remplacer, le second est le remplacent et
//enfin la phrase dans laquelle faire ça
$ma_variable = str_replace('b','p','bim bam boum');
echo $ma_variable ."<br/>";

$phrase1 = "Bonjour, je vais me melanger arriverez-vous à me relire";
$melange = str_shuffle($phrase1);

echo $melange."<br/><br/>";

//Pour mettre tous les caractères en miniscules
$phrase2 = "J'écrIs COMMe JE veux JE mE fichE de La ponctuation MAIS PHP Va Me Remettre Dans LE DROIT chemIN";
$minuscule= strtolower($phrase2);

echo $minuscule. " pourtant avant son intervention j'étais comme ça : <br/>". $phrase2 . "<br/><br/>";

//pour afficher la date
$annee = date('Y');
$mois = date('m');
$heure = date('H');
$minute= date('i');
$jour= date('d');
echo "Nous sommes le : ".$jour ." " .$mois ." ".$annee . " et il est : " .$heure . "h". $minute . "<br/><br/>";


//La création de ses propres fonctions
function DireBonjour($nom)
{
    echo "Bonjour tu es " . $nom . " !<br/>";
}

DireBonjour('Marie');
DireBonjour('Pierre');
DireBonjour('Anakin');
DireBonjour('Renée');
DireBonjour('Lune');
DireBonjour('Père Noël');

//Pour calculer le volume d'une cône
function VolumeCone($rayon, $hauteur)
{
    $volume= $rayon * $rayon * 3.14 * $hauteur * (1/3); //calcul du volume
    return $volume;
}
$volume = VolumeCone(3, 1);
echo "Le volume d'une cône de rayon 3 et de hauteur de 1 est : " .$volume;

?>