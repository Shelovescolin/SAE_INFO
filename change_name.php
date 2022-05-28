<?php
    session_start();
    require('config.php');
    include('test_input.php');

    if (isset($_REQUEST['nouveau_nom']))
    {
        $nouveau_nom = test_input($_REQUEST['nouveau_nom']);
    }

    if($db_found)
    {
        $sql = "UPDATE users SET nom = '" . $nouveau_nom . "' WHERE prenom = '" . $_SESSION['prenom'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    }
    $_SESSION['nom'] = $nouveau_nom;

    mysqli_close($db_handle);

?>