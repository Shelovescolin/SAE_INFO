<?php

    require('config.php');
    require('recup_id_current_user.php');

    if($db_found)
    {
        $sql = "DELETE FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

    }
    else
    {
        echo "Erreur de suppression des favoris, veuillez réessayer.";
    }

    header('Location: http://localhost:3000/SAE/accueil.php');
    exit();

?>