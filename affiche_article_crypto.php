<?php

    session_start();
    require('config.php');
    require('recup_id_current_user.php');

    if($db_found)
    {
        $sql = "SELECT date_publi,theme,auteur, lien_article, titre_article, description_article FROM infoarticle WHERE theme = '" . $data['nom_fav'] . "';";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            $date_publi = $data['date_publi'];
            $theme = $data['theme'];
            $auteur = $data['auteur'];
            $lien_article = $data['lien_article'];
            $titre_article = $data['titre_article'];
            $description_article = $data['description_article'];
        }  
    }
    else
    {
        echo "Erreur de récupération des favoris";
    }

?>