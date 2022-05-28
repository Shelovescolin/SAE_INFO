<?php

    session_start();
    require('config.php');
    if($db_found)
    {
        $sql = "SELECT id_user FROM users WHERE nom = '" . $_SESSION['nom'] . "' AND prenom = '" . $_SESSION['prenom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            $_SESSION['id_user'] = $data['id_user'];
        }  
    }
    else
    {
        echo "Erreur de récupération de l'id";
    }

?>