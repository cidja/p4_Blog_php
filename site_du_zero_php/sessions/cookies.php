<?php
setcookie('pseudo', 'cidja', time() + 365*24*3600, null, null, false,true);
setcookie('pays', 'france', time() + 365*24*3600, null, null, false, true);
//c'est le http only la fin permet d'interdire l'accès aux cookies à JS
//TOUJOURS ecrire setcookie avant TOUT code même l'entête HTML
setcookie('pays', 'Chine',time() +365*24*3600, null, null, false, true);
//pour modifier un cookie on prends le même nom comme au dessus
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ma super page</title>
        <meta charset= 'utf-8'>
    </head>
    <body>
       <p>Et je me me souviens de toi, tu t'appelles <?php echo $_COOKIE['pseudo']; ?>
       et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ? </p> 
    </body>
</html>

