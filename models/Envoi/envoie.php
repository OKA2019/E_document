<?php



  /* Fonction avis de permutation */
  function envoie ()
  {
    
  require '../../models/bd_connexion.php';
 
  $desti = $user->prepare("SELECT iden_users FROM users WHERE cle_pub =:Fichier_pub");
  $desti = $desti->bindValue(':Fichier_pub',$Fichier_pub).
  $desti = $desti->execute();
  
      /** envoie de données a la bd */
      $i=1;
      
      $nom = $_POST['nom'];
      $libelle = $_POST['libelle'];
      $gros_fichier = $_FILES['gros_fichier'];
      $signe_fichier = $_FILES['signe_fichier'];
      $empreint = $_FILES['empreint'];
      $dat_recu = $_POST['dat_recu'];
      $exp_iden = $_POST['exp_iden'];
      $iden_dest  = $_POST['ecole'];
  

      $addavis = $user->prepare('INSERT INTO `avis_permutat`(`Id_permut`, `nom`, `prenoms`, `mail`, `telephone`, `localite`, `zone`, `dren_souh`, `matricule`, `annee`) 
      VALUES (:Id_permut, :nom, :prenoms, :mail, :telephone, :localite, :zone1, :dren_souh, :matricule, :an) ');
      $addavis = $addavis->execute(
          [ 'Id_permut'=> NULL,
          'nom' => $nom,
          'prenoms' => $prenom,²
          'mail'=>$mail,
          'telephone' => $tel,
          'localite' => $local,
          'zone1' => $zone,
          'dren_souh' => $dren,
          'matricule'=> $matricule,
          'an'=> $an
      ]);
      return $addavis;
  }
  

/** fonction de selection de la liste des iep */
function listeavis()
{
  require_once 'models/bd_connexion.php';
  
  // requête de selection des joueurs
  $listeavis = "SELECT*FROM avis_permutat ";
  
  $avis = $user->query($listeavis);
  $avis = $avis->fetchAll(PDO::FETCH_CLASS);

  return $avis;
}

// selections des tout les enseignants
function liste_institu()
{
  
  $username = 'root';
  $pass = '';
  try {
          $user = new PDO('mysql:host=localhost;dbname=pct', $username, $pass);
          $user->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $user->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
  } 
  catch (PDOException $e) {
          die('echec lors de la connexion à la base de données:' . $e->getMessage());
      }

      $institu = "SELECT matricule, personnel.nom AS nom_perso, prenoms, mail, telephone, emploi, nom_iep, nom_dren, nom_localite, Chef_Lieux, nom_dren 
      FROM fonction, personnel, iep,localite, dren
      WHERE fonction.Id_fonct = personnel.id_fonct 
      AND personnel.Id_iep = iep.Id_iep 
      AND iep.Id_localite = localite.Id_localite 
      AND iep.Id_dren = dren.Id_dren";
    $ensei = $user->query($institu);
    $ensei = $ensei->fetchAll(PDO::FETCH_CLASS);

  return $ensei;
  
}

//Recherche enseignat
function seachEnsei(string $nom)
{
  
  $username = 'root';
  $pass = '';
  try {
          $user = new PDO('mysql:host=localhost;dbname=pct', $username, $pass);
          $user->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $user->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
  } 
  catch (PDOException $e) {
          die('echec lors de la connexion à la base de données:' . $e->getMessage());
      }

      $institu = "  ";
    $ensei = $user->query("SELECT matricule, personnel.nom AS nom_perso, prenoms, mail, telephone, emploi, nom_iep, nom_dren, nom_localite, Chef_Lieux, nom_dren 
    FROM fonction, personnel, iep,localite, dren
    WHERE fonction.Id_fonct = personnel.id_fonct 
    AND personnel.Id_iep = iep.Id_iep 
    AND iep.Id_localite = localite.Id_localite 
    AND iep.Id_dren = dren.Id_dren
    AND ( (personnel.nom LIKE '%$nom%' ) OR (prenoms LIKE '%$nom%') OR (matricule LIKE '%$nom%'))");
    $ensei = $ensei->fetchAll(PDO::FETCH_CLASS);

  return $ensei;
  
}

 
