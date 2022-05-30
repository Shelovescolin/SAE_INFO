<?php
    session_start();
    require('config.php');
    require('recup_id_current_user.php');

    if($db_found)
    {
        $sql = "DELETE FROM demande_article WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql); 

        $sql = "DELETE FROM comment WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        $sql = "DELETE FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);   

        $sql = "DELETE FROM users WHERE id_user = " . $_SESSION['id_user'] . ";";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

    }

    $_SESSION = array();
    session_destroy();

    header('Location: http://localhost:3000/SAE/accueil.php');
    exit();

?>