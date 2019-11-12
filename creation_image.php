<?php
//Source: https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916429-creez-des-images-en-php

header("Content-type: image/png"); //on dit au navigateur que la page va être une image et pas du code HTML
$image = imagecreatefromjpeg("coucher_soleil.jpg");


//on demande a php de nous afficher l'image
imagejpeg($image);
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'image a l'aide de PHP</title>
</head>
<body>
    
</body>
</html>