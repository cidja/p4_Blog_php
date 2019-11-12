<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Ma page</title>
            <meta charset='utf-8'>
        </head>
        <body>
            <p>Bienvenue dans ton univers <?php echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'];?>
            <p>Ceci est ta page rien que pour toi tu vas pouvoir t'en donner à coeur joie</p>
        </body>
    </html>