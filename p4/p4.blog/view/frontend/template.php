<!-- source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4682286-creer-un-template-de-page#/id/r-4682316 !-->
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <header>
    <!--Utiliser pour afficher le formulaire de connexion !-->
    <div class="accessbackend"> 
    Accés adminstrateur :
        <form action="" method="post">
            <label for="identifiant"><input type="text" name="identifiant" id="identifiant" placeholder="identifiant" required /></label>
            <label for="mdp"><input type="password" name="mdp" id="mdp" placeholder="mot de passe" required /></label>
            <input type="submit" value="connexion" />
        </form>
    </div>
    </header>

        <?= $content ?> <!--va contenir ce que l'on veut mettre dedans direction indexView.php !-->
    </body>
</html>
