<?php
session_start();
$_SESSION['nom']= 'jean';
$_SESSION['prenom'] = 'ali';
$_SESSION['age'] = 25;
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Accueil</title>
            <meta charset='utf-8'>
        </head>
        <body>
            <p>
                Salut <?php echo $_SESSION['nom']. ' ' . $_SESSION['prenom']; ?> ! <br/>
                Tu es sur l'accueil de mon site (accueil.php), tu veux aller sur une autre page ?
            </p>
            <p>
                <a href='mapage.php'>Lien vers ma page.php</a><br/>
                <a href="monscript.php">Lien vers monscript.php</a><br/>
            </p>
        </body>
    </html>