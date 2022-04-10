<?php
/** Appel de la class qui va générer le code d'ajout d'un admin */
require '../models/bd_authen.php';
        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $email = $_POST['email'];
        $nom_users = $_POST['nom_users'];
        $mot_pass = $_POST['mot_pass'];

        $verif = false;
        foreach ($perso as $utilisateur) {
                if ($utilisateur->nom_users == $nom_users) {
                    $verif = true;
                    
                    break;
                }
        }
        if ($verif) {
                echo "<script type=\"text/javascript\">";
                echo " alert('ERREUR, Ces coodonnées n\'existe dans la base');";
                echo "window.history.back();";
                echo "</script>";
        }
        else
        {
                require 'pairecle.php';
                require '../models/bd_inscription.php';
                $_SESSION['users'] = $utilisateur->users;

                echo "<script type=\"text/javascript\">";
                echo " alert('Votre inscription à bien été pris en compte');";
                echo "</script>";
                header('location:../index.php?page=profil');

        }
        