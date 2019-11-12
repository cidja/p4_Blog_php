<!DOCTYPE html>
    <html>
        <head>
            <title>Les codes de la NASA</title>
            <meta charset="utf-8">
        </head>
        <body>
        <?php
        if (!isset($_POST['mdp']) AND ($_POST['mdp']!= 'kangourou'))
        {
        
echo <<<END
         <p>Veuillez entrer le mot de passe pour accéder au serveur qui contient le mot de passe </p>
        <p>
            <form method="post" action="formulaire_seul.php">
                Entrez le mot de passe : 
                <input type="password" name="mdp">
            </form>
        </p>
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la
        NASA vous ne trouverez pas le mot de passe</p>
END;
        }
        else if($_POST['mdp'] == 'kangourou')
        {
            echo"Bon mot de passe";
        }
        else
        {
        echo "mauvais mot de passe";
        }
        ?>
        </body>
    </html>