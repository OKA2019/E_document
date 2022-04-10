<?php
        $username = 'oka2019';
        $pass = '123456789';
        try {
                $user = new PDO('mysql:host=localhost;dbname=E_document', $username, $pass);
                $user->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $user->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
        } 
        catch (PDOException $e) {
                die('echec lors de la connexion à la base de données:' . $e->getMessage());
            }
        
?>