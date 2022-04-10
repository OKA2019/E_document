
<?php
require 'models/bd_authen.php';
$_SESSION['connecte'] = connect($_SESSION['users']);
$conn = $_SESSION['connecte'];
require 'models/Envoi/traces_envoie.php';
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

    <link href="assets/css/profil.css" rel="stylesheet">
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
               echo ''.$conn[3];
                ?> 
              </h1>
              <p> 
              <?php
                echo ''.$conn[5];
                ?> 
              </p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="index.php?page=profil"> <i class="fa fa-user"> Gestionnaire de compte </i> </a>
                        </li>
                        <li class="active"><a href="#"> <i class="fa fa-send"></i> Envoi de document</a></li>
                        <li ><a href="index.php?page=recu"> <i class="fa fa-bell-o"></i> Documents reçus</a></li>
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


                    <div class="panel">
                        <form action="index.php?page=cryptage" method="post" style="font-size:16px;line-height:20px" enctype="multipart/form-data">
                            <legend style="text-align:center; "> Envoyer un document</legend>
                            <!-- 
                            <footer class="panel-footer">
                                <label for=""> Nom destinataire : </label>
                                <input style="width: 80%; height:40px; border-raduis:10px;margin-left:2%;border: none;" type="text"
                                    name="nom_dest" placeholder="Nom d'utilisateur du destinateur " required>
                            </footer>
                            <footer class="panel-footer" style="display:flex">
                                <label for=""> Message : </label>
                                <textarea style="width: 80%; position:right; border-radius:10px;margin-left:auto"
                                    placeholder="Envoyer un document" rows="2"
                                    class="form-control input-lg p-text-area"></textarea>
                            </footer>
                            -->
                            <footer class="panel-footer">
                                <label for="file"  style="width: 100%; position:right; border-raduis:10px;margin-left:auto" class="input input-file"> Fichier a signer : </label>
                                <div class="button">
                                <input type="file" name="signature" required>
                                </div>
                            </footer>
                            <button style="text-align:center;padding:5px; color:white;font-size:20px; position:relative;background-color:green;margin-left:37%;border-radius: 30px; width:24%">Envoyer</button>
                        </form>
                    </div>


                    <div class="panel-body bio-graph-info">
                        <h3 style="text-align:center;margin:0px"> <b> Documents Envoyer</b> </h3>
                        <div style="width:100%;" class="profile-info col-md-9">
                            <section id="edit">
                                <div role="tabpanel" class="tab-pane fade active in" id="user-profile__portfolio">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4" style="width:100%;">
                                                                    
                                            <?php
                                                $i = 1;
                                                
                                                echo '                                                 
                                                        <table style="width:100%;">
                                                        
                                                        <tr style="width:100%;height:40px">
                                                            <th style="width:20px;">
                                                                N°
                                                            </th>
                                                            <th style="width:50%;">
                                                                Documents
                                                            </th>
                                                            <th style="width:30%;height:40px">
                                                                Destinataire
                                                            </th>
                                                            <th style="width:40px;">
                                                                Date
                                                            </th>
                                                        </tr>';
                                            foreach ($traces as  $valeur) {
                                                        echo '<tr style="width:100%;height:50px">
                                                                <td>
                                                                '.$i. '
                                                                </td>
                                                                <td>
                                                                    '.$traces[0]. '
                                                                </td>
                                                                <td>
                                                                    '.$traces[1]. '
                                                                </td>
                                                                <td>
                                                                    '.$traces[2]. '
                                                                </td>
                                                        </tr>
                                                ';
                                                $i++;
                                            }
                                            echo '
                                            </table>';
                                            ?>


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