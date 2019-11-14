<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super Blog</title>
</head>
    <body>
        <h1>Mon super Blog </h1>
        <p>Derniers billets du blog</p>

        <?php
        while($data = $posts->fetch())
        {
        ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data["title"]); ?>
                    <em> le <?= htmlspecialchars($data["creation_date_fr"]) ?> </em>
                </h3>

                <p>
                    <?= nl2br(htmlspecialchars($data["content"])); ?>
                    <br/>
                    <em><a href="#">Commentaires</a></em>
                </p>
            </div>
        <?php
        }
        $posts->closeCursor();
        ?>
    </body>
</html>