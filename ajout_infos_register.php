<?php

    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "Colin13-iris29";
    $DB = "SAE_INFO";

    $db_handle = new mysqli($server, $user, $pass);
    $db_found = mysqli_select_db($db_handle, $DB);

    if($db_found)
    {
        $sql = "INSERT INTO users(nom,prenom,mail,numtel,password) VALUES ('" . $_SESSION['nom'] . "','" . $_SESSION['prenom'] . "','" . $_SESSION['mail'] . "','" . $_SESSION['num_tel'] . "','" . $_SESSION['cypherpass'] . "');";
        echo $sql;
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        
    }
?>