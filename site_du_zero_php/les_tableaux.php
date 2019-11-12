<?php
//pour créer un tableau numéroté
$prenoms = array('Francois', 'Jean-Jacques', 'Irene', 'Anakin', 'Michou', 'Franck');

echo $prenoms[2];

//pour créer un tableau associatif
$coordonnees = array(
    'prenom' => 'Francois',
    'nom' => 'paco',
    'ville' => 'Paris',
    'sexe' => 'homme');

    
//on peut remplir les tableaux case par case également     
$coordonnees['prenom'] = 'irene';
$coordonnees['nom'] = 'escobar';
$coordonnees['ville'] = 'Nice';
$coordonnees['sexe'] = 'femme';

//pour afficher un élément d'un tableau
echo $coordonnees['ville']."<br/><br/>";

//parcourir un tableau avec la boucle "for"
for ($numero = 0 ; $numero <= 5 ; $numero++)
{
    echo $prenoms[$numero] . "<br/>";
}

//la boucle foreach
foreach($prenoms as $element)
{
    echo $element . '<br/>';
}

//ça marche aussi sur les tableaux associatifs pour afficher la clé on fait comme ça
foreach($coordonnees as $cle => $element)
{
    echo "je suis la clé :" . $cle . ' je correspond à : ' . $element. '<br/>';
}

//si l'on veut savoir ce qu'il y a dans un tableau sans mise en forme on utilise print_r
echo '<pre>'; //pour afficher les mises en formes
print_r($coordonnees);
echo '<pre>';


//pour rechercher si une clé existe dans un tableau

if(array_key_exists('nom', $coordonnees))
{
    echo 'la clé "nom" existe<br/>';
}

if ( array_key_exists('pays', $coordonnees))
{
    echo 'la clé "pays" se trouve dans les coordonnées';
}
//pour rechercher dans un tableau
$fruits = array('banane','mangue','raisins','poires','abricots');

if (in_array('banane', $fruits))
{
    echo 'La variable "banane" se trouve dans les fruits<br/>';
}
if (in_array('courgettes',$fruits))
{
    echo 'la variable "courgettes" se trouve dans les fruits';
}

//array search va permettre de retrouver la clé correspondante
$position = array_search('mangue', $fruits);
echo '"mangue" se trouve en position' . $position . "<br/>";

$position = array_search('abricots', $fruits);
echo '"abricots" se trouve en position' . $position . "<br/>";

foreach ($fruits as $element){
    echo $element . '<br/>';
}

for ($nombre = 0 ; $nombre<5 ; $nombre++)
{
    echo $fruits[$nombre]. '<br/>';
}
?>