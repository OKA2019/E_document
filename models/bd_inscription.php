<?php
      
require 'bd_connexion.php';
 $iden_users = "TEC". time();   
    $users_add = $user->prepare('INSERT INTO `users`(`iden_users`, `nom`, `prenoms`, `nom_users`, `date_naiss`, `email`, `mot_pass`, `sign_users`, `cle_priv`, `cle_pub`) 
        VALUES (:iden_users, :nom, :prenoms, :nom_users, :date_naiss, :email, :mot_pass, :sign_users, :cle_priv, :cle_pub) ');
        $users_add = $users_add->execute([
          'iden_users' => $iden_users,
          'nom' => $nom,
          'prenoms' => $prenoms,
          'nom_users' => $nom_users,
          'date_naiss' => NULL,
          'email' => $email,
          'mot_pass' => $mot_pass,
          'sign_users' => NULL,
          'cle_priv' => $Clepriver,
          'cle_pub' => $Clepublique]
        );

    
?>
