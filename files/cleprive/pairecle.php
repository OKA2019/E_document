<?php
        $Clepriver = $_POST['nom_users'].'Priver';
        $Clepublique = $_POST['nom_users'].'Publique';
        system("openssl genrsa -out $Clepriver.pem 1024");
        system("openssl rsa -in $Clepriver.pem -out $Clepublique.pem");

                    
?>
