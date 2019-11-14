<!--Dans cette vue, on affiche le billet (récupéré avec $post ) et les commentaires (récupérés dans$comments ) !-->

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css" />
        <title>postView (vue des billets)</title>
    </head>
    <body>
        <h1>Mon super blog</h1>
        <p><a href="index.php">Retour à la liste des billets </a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post["content"])) ?>
            </p>
        </div>

        <h2>Commentaires </h2>

        <?php
        while($comment = $comments->fetch()) // On parcours le tableau source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4678891-nouvelle-fonctionnalite-afficher-des-commentaires#/id/r-4681307
        {
        ?>
            <p><strong><?= htmlspecialchars($comment["author"]) ?></strong> le
            <?= htmlspecialchars($comment["comment_date_fr"]) ?> </p>
            <p><?= nl2br(htmlspecialchars($comment["content"])) ?></p>
        <?php
        }
        ?>
    </body>
</html>