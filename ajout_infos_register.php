<?php

    session_start();
    require('config.php');

    if($db_found)
    {
        $sql = "INSERT INTO users(nom,prenom,mail,numtel,password) VALUES ('" . $_SESSION['nom'] . "','" . $_SESSION['prenom'] . "','" . $_SESSION['mail'] . "','" . $_SESSION['num_tel'] . "','" . $_SESSION['cypherpass'] . "');";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        
    }
    
    header('Location: http://localhost:3000/SAE/infos_compte.php');
    exit();

?>