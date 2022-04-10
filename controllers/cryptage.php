<?php
require 'models/bd_connexion.php';

if(!empty($_FILES))
{
    $file_name=$_FILES['signature']['name'];
    $file_extension=strrchr($file_name, ".");
    
    $file_tmp_name=$_FILES['signature']['tmp_name'];
    $file_dest ='files/'.$file_name;
    
    $user_con = $_SESSION['users'];
    $seq = move_uploaded_file($file_tmp_name,$file_dest);
        if($seq)
        {
            // // $outup = exec('bash ../../script.sh');
            // echo  shell_exec('ls');
            require 'models/Envoi/cryptage.php';
            if($req)
            {
                echo "<script type=\"text/javascript\">";
                echo " alert('Le fichier a été envoyer avec succès');";
                echo "window.location('./index.php?page=envoi');)";
                echo "</script>";
            }
            else
            {
                var_dump($req);
            }
        }
        else{
            echo "<script type=\"text/javascript\">";
            echo " alert('ERREUR d\'envoie veuillez réessayer !!!');";
            echo "window.history.back();";
            echo "</script>";
        }
    // echo "nom ".$file_name.'<br>';
    // echo "Type ".$file_extension.'<br>';

}
else{
    echo "<script type=\"text/javascript\">";
    echo " alert('ERREUR, veuillez selectionner un fichier');";
    echo "window.history.back();";
    echo "</script>";
}

?>