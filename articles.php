<?php
        session_start();
        require('config.php');
        require('recup_id_current_user.php');
        require('recup_type_compte.php');
    
        if($db_found)
        {
            $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
            $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
    
            while ($data = mysqli_fetch_assoc($req))
            {    
                if($data['nom_fav'] == "hacking")
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

                        echo $date_publi . " " . $theme . " " . $auteur . "</br>";
                    } 
                }
            }  
        }


    



?>