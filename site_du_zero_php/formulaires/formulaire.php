<form method=post action='cible.php'>
    <input type="text" name="prenom" placeholder="rentrez votre prenom ici">
    <br/>
    <textarea name='message' rows="8" cols= '45'>Entrez votre texte ici</textarea>
    <br/>
    <select name="choix">
        <option value="choix1">Choix 1</option>
        <option value="choix2">Choix 2</option>
        <option value="choix3">Choix 3</option>
        <option value="choix4">Choix 4</option>
    </select><br/>
    <input type="checkbox" name="case" id="case">
    <label for="case">Ma case à cocher</label>
    <br/>
    Tu aimes les frites ? <br/>
    <input type='radio' name="frites" value="oui" id="oui" checked="checked">
    <label for="oui">oui</label>
    <input type='radio' name="frites" value='non' id='non'>
    <label for="non">Non</label>
    <br/>
    
    <input type='submit' value="valider">
    
    
</form>