<?php
    session_start();
    require '../models/bd_authen.php';
    /** connexion a la base et envoie le matricule */
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['mdp'];
    foreach ($perso as $utilisateur) {
        if ($utilisateur->nom_users == $pseudo && $utilisateur->mot_pass == $pass) {
            $_SESSION['users'] = $utilisateur->nom_users;
            header('location:../index.php?page=profil');
        }
    }
    echo "<script type=\"text/javascript\">";
    echo " alert('ERREUR, Ces coodonnées n\'existe pas dans la base');";
    echo "window.history.back();";
    echo "</script>";