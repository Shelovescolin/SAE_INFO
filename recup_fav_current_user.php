<?php

    session_start();
    require('config.php');
    require('recup_id_current_user.php');

    if($db_found)
    {
        $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            echo "<table border='1' width='400' align='center'>";
                echo "<tr>";
                    echo "<td width='200'><b>". $data['nom_fav'] . "</b></td>";
                echo "</tr>";
            echo "</table>";
        }  
    }
    else
    {
        echo "Erreur de récupération des favoris";
    }

?>