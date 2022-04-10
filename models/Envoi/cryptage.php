<?php
        require 'models/bd_connexion.php';

                
        $nomC = $_SESSION['users'].''.$file_dest;
        $nomS = $file_tmp_name.''.$file_dest;

        system("openssl enc -e -aes-256-cbc -in $nomS -out $nomC ");

        $user_con = $_SESSION['users'];
        $seq = move_uploaded_file($file_tmp_name,$file_dest);

        $iden = $user->query("SELECT iden_users FROM `users` WHERE `nom_users` = '$user_con' LIMIT 1");
        $iden =  $iden->fetch();
        $req = $user->prepare('INSERT INTO envoie(iden_envoie ,libelle,gros_fichier,signe_fichier,	empreunte, dat_recu, iden_users) values(?,?,?,?,?,?,?) ');
        $req->execute(array(NULL,$file_name,$file_dest,NULL,NULL,NULL,$iden[0]));

        
