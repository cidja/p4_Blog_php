<?php

$db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");
$result = $db->query("SELECT user,mdp FROM users");
foreach($result as $data){
    ?> Username = <?=$data["user"]; ?><br/>
    mot de passe = <?=$data["mdp"]; 
    
if (password_verify($_POST["mdp"], $data['mdp']))
 {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
}