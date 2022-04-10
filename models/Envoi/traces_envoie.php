<?php
        $traces = $user->query("SELECT distinct libelle,nom_users,dat_recu FROM `envoie`,`users` WHERE envoie.iden_users = users.iden_users AND  `users`.`nom_users` = '$conn[3]' AND  `envoie`.`iden_users` = '$conn[0]'");
        $traces =  $traces->fetch();

        
