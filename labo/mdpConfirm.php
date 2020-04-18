<?php

$db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "sudo", "boby06");

$user = htmlspecialchars($_POST['user']);
$mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT); 
echo $mdp;
$req = $db->prepare("INSERT INTO users(user,mdp,inscription_date)
VALUES (:user, :mdp, NOW())");
$result = $req->execute(array(
    "user"      => $user,
    "mdp"       => $mdp
));

//header("location: index_mdp.php");

//$req = $db->prepare("INSERT INTO ")