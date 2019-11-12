<!-- source : https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4682286-creer-un-template-de-page !-->
<?php $title = "Mon blog"; //Définition du titre de la page dans la variable $title?> 

<?php ob_start(); //
//On appelle la fonction ob_start() (ligne 3) qui "mémorise" toute la sortie HTML qui suit, puis, à
//récupère le contenu généré avec ob_get_clean()  (ligne 28) et on met le tout dans $content .
?> 
<h1>Mon super blog ! </h1>
<p>Derniers billes du blog :</p>
        <?php
        while($data = $posts->fetch())
        {
        ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
                </h3>
            
                <p>
                <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                    <em><a href="#">Commentaires</a></em>
                </p>
            </div>
        <?php
        }
        $posts->closeCursor();
        ?>
        <?php $content = ob_get_clean(); ?>

        <?php require("template.php");//Enfin, il appelle le template avec un require. Celui-ci va récupérer les variables $title et $content qu'on vient de créer... pour afficher la page !
         ?>
   