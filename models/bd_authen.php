<?php
      
require 'bd_connexion.php';
        
$perso = $user->query('SELECT*FROM users');
$perso = $perso->fetchAll(PDO::FETCH_OBJ);

function connect(string $personne)
{
    require 'bd_connexion.php';
    $users = $user->query("SELECT iden_users,nom, prenoms,nom_users,date_naiss, email, cle_priv, cle_pub FROM `users` WHERE `nom_users` = '$personne'");
    $users = $users->fetch();
    return $users;
}
?>
