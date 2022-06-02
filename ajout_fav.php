<?php

    session_start();
    require('config.php');
    require('recup_id_current_user.php');

    if(isset($_POST['cyber'])) $fav1 = 'cybersecurity';
        else $fav1 = "";

    if(isset($_POST['hacking'])) $fav2 = 'hacking';
        else $fav2 = "";

    if(isset($_POST['networks'])) $fav3 = 'networks';
        else $fav3 = "";

    if(isset($_POST['crypto'])) $fav4 = 'cryptography';
        else $fav4 = "";


    if($db_found)
    {
        $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $nb = mysqli_num_rows($req);
        if($nb != 0)
        {
            $sql = "DELETE FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
            $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        }
    }

    $fav = [$fav1, $fav2, $fav3, $fav4];

    foreach($fav as $favoris)
    {
        if(($db_found) AND (!empty($favoris)))
        {
            $sql = "INSERT INTO favoris(nom_fav,id_user) VALUES ('" . $favoris . "','" . $_SESSION['id_user'] . "');";
            $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        }
    }

    header('Location: http://localhost:3000/SAE/accueil.php');
    exit();
?>