<?php
    session_start();
    require('config.php');
    require('recup_id_current_user.php');


    $table = ['demande_article', 'commentaire', 'favoris', 'users'];

    if($db_found)
    {
        foreach($table as $t)
        {
            $sql = "DELETE FROM " . $t . " WHERE id_user = '" . $_SESSION['id_user'] . "';";
            $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql); 
        }
    }

    $_SESSION = array();
    session_destroy();

    header('Location: http://localhost:3000/SAE_INFO/accueil.php');
    exit();

?>