<?php

    session_start();
    require('recup_fav_current_user.php');
    require('config.php');

    if($db_found)
    {
        $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
        $nb = mysqli_num_rows($req);

        if($nb != 0)
        {
            echo "<a href='http://localhost:3000/SAE/delete_fav.php'><button>Supprimer les favoris</button></a>";
        }
        else
        {
            echo "Vous n'avez aucun thème en favoris. </br>";
            echo "<a href='http://localhost:3000/SAE/fav_chose.html'><button>Ajouter des favoris</button></a>";
        }
    }

?>