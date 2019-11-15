<?php //deviens notre routeur 
//source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4682351-creer-un-routeur#/id/r-4682481

require("./controller/controller.php");

try { // on essai de faire des choses source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4689546-gerer-les-erreurs#/id/r-4689754
    if(isset($_GET["action"])){
        if($_GET["action"] == "listPosts"){ //si dans l'url action = listPosts on appel listPosts du controller
            listPosts();
        }
        elseif ($_GET["action"] == "post"){
            if(isset($_GET['id']) && $_GET["id"] > 0){ //Si dans l'url action = post on appel post du controller
                post();
            }
            else {
                // Erreur ! on arrête tout, on envoie une exception, donc on saute directement au catch
                throw new Exception("Aucun identifiant de billet envoyé");
            }
        }
        elseif ($_GET["action"] == "addComment") { //Si dans l'url action = addComment on appel on envoi les paramètres à la fonction addComment
            //source: https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4683301-nouvelle-fonctionnalite-ajouter-des-commentaires#/id/r-4683671
            if (isset($_GET["id"]) && $_GET["id"] > 0){
                if (!empty($_POST["author"]) && !empty($_POST["comment"])) {
                    addComment($_GET["id"], $_POST["author"], $_POST["comment"]);
                }
                else {
                    // Autre exception
                    throw new Exception("Erreur tous les champs ne sont pas remplis !");
                }
            }
            else {
                // Autre exception
                throw new Exception("Erreur : aucun identifiant de billet envoyé");
            }
    
        }
    }
    else{
        listPosts(); //appel de listPosts() liste des posts
    }
}
catch(Exception $e) // s'il y a une erreur, alors...
{
    echo "Erreur : " . $e->getMessage();
}
    /*
        On charge le fichier controller.php (pour que les fonctions soient en mémoire, quand même !).
    
        On teste le paramètre action pour savoir quel contrôleur appeler. Si le paramètre n'est pas présent, 
        par défaut on charge la liste des derniers billets (ligne 16). C'est comme ça qu'on indique ce que doit 
        afficher la page d'accueil du site.
    
        On teste les différentes valeurs possibles pour notre paramètre action et on redirige vers le bon contrôleur à chaque fois.
    
    */

