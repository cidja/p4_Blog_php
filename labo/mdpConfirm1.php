<?php
//source: https://my.ionos.fr/pdo-extension/dbs224218
$host_name = 'db5000229643.hosting-data.io';
$database = 'dbs224218';
$user_name = 'dbu348423';
$password = '6C@ieJ+@72wG';
$dbh = null;


try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }

    
$user = htmlspecialchars($_POST['user']);
$mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT); 
echo $mdp;
echo $user;
$req = $dbh->prepare("INSERT INTO users(user,mdp,inscription_date)
VALUES (:user, :mdp, NOW())");
$result = $req->execute(array(
    "user"      => $user,
    "mdp"       => $mdp
));

header("location: /view/index_mdp.php");

//$req = $db->prepare("INSERT INTO ")