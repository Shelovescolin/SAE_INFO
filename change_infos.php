<?php
    session_start();
    require_once('config.php');
    include('test_input.php');

    if(($db_found) AND isset($_POST['nouveau_nom']) AND !empty($_POST['nouveau_nom']))
    {
        $sql = "UPDATE users SET nom = '" . $_POST['nouveau_nom'] . "' WHERE prenom = '" . $_SESSION['prenom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $_SESSION['nom'] = $_POST['nouveau_nom'];
    }

    if(($db_found) AND isset($_POST['nouveau_prenom']) AND !empty($_POST['nouveau_prenom']))
    {
        $sql = "UPDATE users SET prenom = '" . $_POST['nouveau_prenom'] . "' WHERE nom = '" . $_SESSION['nom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $_SESSION['prenom'] = $_POST['nouveau_prenom'];
    }

    if(($db_found) AND isset($_POST['nouveau_mail']) AND !empty($_POST['nouveau_mail']))
    {
        $sql = "UPDATE users SET mail = '" . $_POST['nouveau_mail'] . "' WHERE nom = '" . $_SESSION['nom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $_SESSION['mail'] = $_POST['nouveau_mail'];
    }

    if(($db_found) AND isset($_POST['nouveau_tel']) AND !empty($_POST['nouveau_tel']))
    {
        $sql = "UPDATE users SET numtel = '" . $_POST['nouveau_tel'] . "' WHERE nom = '" . $_SESSION['nom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $_SESSION['numtel'] = $_POST['nouveau_tel'];
    }

    if(($db_found) AND isset($_POST['nouveau_password']) AND !empty($_POST['nouveau_password']))
    {
        $sql = "UPDATE users SET password = '" . password_hash($_POST['nouveau_password'], PASSWORD_DEFAULT) . "' WHERE nom = '" . $_SESSION['nom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $_SESSION['password'] = $_POST['nouveau_password'];
        $_SESSION['cypherpass'] = password_hash($_POST['nouveau_password'], PASSWORD_DEFAULT);
    }   

    header('Location: http://localhost:3000/SAE_INFO/infos_compte.php');
    exit();

    mysqli_close($db_handle);

?>