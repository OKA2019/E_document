
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

    <link href="assets/css/profil.css" rel="stylesheet">
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
            <li ><a href="index.php?page=profil"> <i class="fa fa-user"> Gestionnaire de compte </i> </a></li>
            <li ><a href="index.php?page=envoi"> <i class="fa fa-send"></i> Envoi de document</a></li>
            <li ><a href="index.php?page=recu"> <i class="fa fa-bell-o"></i> Documents reçus</a></li>
            <li class="active"><a href="index.php?page=depot"> <i class="fa fa-print"></i> Depot publique</a></li>
            <li ><a href="index.php?page=deconnexion"> <i class="fa fa-user"></i> Deconnexion</a></li>
        </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">
      
     
  </div>
</div>
</div>


<section id="edit">

        

</section>


<script type="text/javascript">

</script>
</body>
</html>