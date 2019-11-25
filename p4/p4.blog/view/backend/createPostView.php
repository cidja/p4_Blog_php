<?php $title = "Création de post"; 

 ob_start(); ?> <!--commencement de la capture pour créer la variable $content qu'on insère dans templateBackend.php !-->
 <h1>Création de billet</h1>

 <!--DOIT TROUVER LE BON CHEMIN DACCES !-->
    <form action="/index.php?action=createPostViewConfirm" method="post">
        <label for="title"> Titre du billet : </label>
            <input type="text" id="title" name="title" placeholder="Titre" required autofocus />
        <label for="content">Contenu du billet : </label>    
 <!--en dessous utilisation des balises pour Tiny MCE pour écrire les posts !-->
        <textarea id="content" name="content" placeholder="rentrez votre texte ici" required></textarea>
        <input type="submit" value="valider" />
    </form> 

    <?php  
    $content = ob_get_clean();

require("templateBackend.php"); 

?>