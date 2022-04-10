
<?php
require 'models/bd_authen.php';
    $_SESSION['connecte'] = connect($_SESSION['users']);
    $conn = $_SESSION['connecte'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>user profile bio graph and total sales - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <link href="views/assets/css/profil.css" rel="stylesheet">
    <link href="assets/css/recu.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </a>
              <h1> <?php
               echo ''.$conn[2];
                ?> 
              </h1>
              <p> 
              <?php
                echo ''.$conn[4];
                ?> 
              </p>

                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="index.php?page=profil"> <i class="fa fa-user"> Gestionnaire de compte </i> </a>
                        </li>
                        <li><a href="index.php?page=envoi"> <i class="fa fa-send"></i> Envoi de document</a></li>
                        <li class="active"><a href="#"> <i class="fa fa-bell-o"></i> Documents reçus</a></li>
                        <li><a href="index.php?page=depot"> <i class="fa fa-print"></i> Depot publique</a></li>
                        <li><a href="index.php?page=deconnexion"> <i class="fa fa-user"></i> Deconnexion</a></li>
                    </ul>
                </div>
            </div>

            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac
                        magna metus.
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h3 style="text-align:center;margin:0px"> <b>Les Documents réçu</b> </h3>
                        <div style="width:100%;" class="profile-info col-md-9">
                            <section id="edit">
                                <div role="tabpanel" class="tab-pane fade active in" id="user-profile__portfolio">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="portfolio__item">
                                                <div class="portfolio-item__img">
                                                    <a href="affichage.html">
                                                        <img src="assets/img/file.png" class="img-responsive" alt="...">
                                                        <div class="portfolio-item__mask">
                                                            <div class="portfolio-item-mask__content">
                                                                <div class="portfolio-item-mask__title">
                                                                    Envoye par Armel DuBois
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    Document de la CINETPAY.
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    le 02/04/2022
                                                                </div>
                                                            </div> <!-- / .portfolio-item-mask__content -->
                                                        </div> <!-- / .portfolio-item__mask -->
                                                    </a>
                                                </div> <!-- / .portfolio-item__img -->
                                            </div> <!-- / .portfolio__item -->
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="portfolio__item">
                                                <div class="portfolio-item__img">
                                                    <a href="affichage.html">
                                                        <img src="assets/img/file.png" class="img-responsive" alt="...">
                                                        <div class="portfolio-item__mask">
                                                            <div class="portfolio-item-mask__content">
                                                                <div class="portfolio-item-mask__title">
                                                                    Envoye par Armel DuBois
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    Document de la CINETPAY.
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    le 02/04/2022
                                                                </div>
                                                            </div> <!-- / .portfolio-item-mask__content -->
                                                        </div> <!-- / .portfolio-item__mask -->
                                                    </a>
                                                </div> <!-- / .portfolio-item__img -->
                                            </div> <!-- / .portfolio__item -->
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="portfolio__item">
                                                <div class="portfolio-item__img">
                                                    <a href="affichage.html">
                                                        <img src="assets/img/file.png" class="img-responsive" alt="...">
                                                        <div class="portfolio-item__mask">
                                                            <div class="portfolio-item-mask__content">
                                                                <div class="portfolio-item-mask__title">
                                                                    Envoye par Armel DuBois
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    Document de la CINETPAY.
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    le 02/04/2022
                                                                </div>
                                                            </div> <!-- / .portfolio-item-mask__content -->
                                                        </div> <!-- / .portfolio-item__mask -->
                                                    </a>
                                                </div> <!-- / .portfolio-item__img -->
                                            </div> <!-- / .portfolio__item -->
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="portfolio__item">
                                                <div class="portfolio-item__img">
                                                    <a href="affichage.html">
                                                        <img src="assets/img/file.png" class="img-responsive" alt="...">
                                                        <div class="portfolio-item__mask">
                                                            <div class="portfolio-item-mask__content">
                                                                <div class="portfolio-item-mask__title">
                                                                    Envoye par Armel DuBois
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    Document de la CINETPAY.
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    le 02/04/2022
                                                                </div>
                                                            </div> <!-- / .portfolio-item-mask__content -->
                                                        </div> <!-- / .portfolio-item__mask -->
                                                    </a>
                                                </div> <!-- / .portfolio-item__img -->
                                            </div> <!-- / .portfolio__item -->

                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4">

                                            <div class="portfolio__item">
                                                <div class="portfolio-item__img">
                                                    <a href="affichage.html">
                                                        <img src="assets/img/file.png" class="img-responsive" alt="...">
                                                        <div class="portfolio-item__mask">
                                                            <div class="portfolio-item-mask__content">
                                                                <div class="portfolio-item-mask__title">
                                                                    Envoye par Armel DuBois
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    Document de la CINETPAY.
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    le 02/04/2022
                                                                </div>
                                                            </div> <!-- / .portfolio-item-mask__content -->
                                                        </div> <!-- / .portfolio-item__mask -->
                                                    </a>
                                                </div> <!-- / .portfolio-item__img -->
                                            </div> <!-- / .portfolio__item -->

                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4">

                                            <div class="portfolio__item">
                                                <div class="portfolio-item__img">
                                                    <a href="affichage.html">
                                                        <img src="assets/img/file.png" class="img-responsive" alt="...">
                                                        <div class="portfolio-item__mask">
                                                            <div class="portfolio-item-mask__content">
                                                                <div class="portfolio-item-mask__title">
                                                                    Envoye par Armel DuBois
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    Document de la CINETPAY.
                                                                </div>
                                                                <div class="portfolio-item-mask__summary">
                                                                    le 02/04/2022
                                                                </div>
                                                            </div> <!-- / .portfolio-item-mask__content -->
                                                        </div> <!-- / .portfolio-item__mask -->
                                                    </a>
                                                </div> <!-- / .portfolio-item__img -->
                                            </div> <!-- / .portfolio__item -->
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </section>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>