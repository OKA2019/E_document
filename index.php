<?php
session_start();
$page = $_GET['page'] ?? '404' ;
    if($page == 'inscription' )
    {
        require 'inscription.php';
    }
    elseif($page == 'connexion')
    {
        require 'connexion.php';
    }
    elseif($page == 'profil' )
    {
        require 'profil.php';
    }
    elseif($page == 'signature' )
    {
        require 'signature.php';
    }
    elseif($page == 'envoi' )
    {
        require 'envoi.php';
    }
    elseif($page == 'recu' )
    {
        require 'recu.php';
    }
    elseif($page == 'depot')
    {
        require 'depot.php';
    }
    elseif($page == 'edit' )
    {
        require 'edit.php';
    }
    elseif($page == 'cryptage' )
    {
        require 'controllers/cryptage.php';
    }
    else
    {
        $_SESSION['users'] = NULL;
        require 'accueil.php';
    }