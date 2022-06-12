<?php

    session_start();
    require_once('config.php');
    require_once('recup_id_current_user.php');

    if($db_found)
    {
        $sql = "SELECT type_compte FROM users WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            $_SESSION['type_compte'] = $data['type_compte'];
        }  
    }
    else
    {
        echo "Erreur de récupération du type de compte.";
    }

?>