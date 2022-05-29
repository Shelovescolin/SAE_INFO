<?php

    session_start();
    require('config.php');
    require('recup_id_current_user.php');

    if(isset($_POST['cyber'])) $fav1 = $_POST['cyber'];
        else $fav1 = "";

    if(isset($_POST['hacking'])) $fav2 = $_POST['hacking'];
        else $fav2 = "";

    if(isset($_POST['networks'])) $fav3 = $_POST['networks'];
        else $fav3 = "";

    if(isset($_POST['crypto'])) $fav4 = $_POST['crypto'];
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

    if(($db_found) AND (!empty($fav1)))
    {
        $sql = "INSERT INTO favoris(nom_fav,id_user) VALUES ('" . "Cybersécurité" . "','" . $_SESSION['id_user'] . "');";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    }

    if(($db_found) AND (!empty($fav2)))
    {
        $sql = "INSERT INTO favoris(nom_fav,id_user) VALUES ('" . "Hacking" . "','" . $_SESSION['id_user'] . "');";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    }

    if(($db_found) AND (!empty($fav3)))
    {
        $sql = "INSERT INTO favoris(nom_fav,id_user) VALUES ('" . "Réseaux" . "','" . $_SESSION['id_user'] . "');";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    } 

    if(($db_found) AND (!empty($fav4)))
    {
        $sql = "INSERT INTO favoris(nom_fav,id_user) VALUES ('" . "Cryptographie" . "','" . $_SESSION['id_user'] . "');";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    }

    header('Location: http://localhost:3000/SAE/accueil.php');
    exit();
?>