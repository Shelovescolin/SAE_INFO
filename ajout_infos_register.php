<?php

    session_start();
    require('config.php');

    if($db_found)
    {
        $sql = "INSERT INTO users(nom,prenom,mail,numtel,password, type_compte) VALUES ('" . $_SESSION['nom'] . "','" . $_SESSION['prenom'] . "','" . $_SESSION['mail'] . "','" . $_SESSION['num_tel'] . "','" . $_SESSION['cypherpass']  . "','" . "défaut" .  "');";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        
    }
    
    header('Location: http://localhost:3000/SAE/accueil.php');
    exit();

?>