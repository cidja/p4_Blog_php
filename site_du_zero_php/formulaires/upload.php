<?php
if(isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
    if($_FILES['monfichier']['size'] <= 1000000)
    {
        
    //pour voir si l'extension est autorisée
    $infosfichier = pathinfo($_FILES['monfichier']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array ('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees))
        {
           move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
           echo "l'envoi a bien été effectué";
        }
    }
}

?>