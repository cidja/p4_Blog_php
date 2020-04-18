<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
    <form action="mdpConfirm1.php" method="post">
        <label for="user">Utilisateur: 
            <input type="text" name="user" id="user" >
        </label>
        <label for="mdp">Mot de passe:
            <input type="password" name="mdp" id="mdp" >
        </label>
        <input type="submit" value="valider">
    </form>
<a href="checkMdp.php">Vérifier mot de passe</a>

</body>
</html>