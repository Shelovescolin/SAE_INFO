<?php
    session_start();
    require('config.php');

    if($db_found)
    {
        $sql = "UPDATE users SET type_compte = 'premium' WHERE nom = '" . $_SESSION['nom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    }
    
    header('Location: http://localhost:3000/SAE_INFO/accueil.php');
    exit();

?>