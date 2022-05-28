<?php

    session_start();
    require('config.php');
    if($db_found)
    {
        $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            echo $data['nom_fav'];
        }  
    }
    else
    {
        echo "Erreur de récupération des favoris";
    }

?>