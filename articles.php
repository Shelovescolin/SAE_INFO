<?php
        session_start();
        require_once('config.php');
        require_once('recup_id_current_user.php');
        require_once('recup_type_compte.php');


        $tab = ["hacking", "cybersecurity", "networks", "cryptography"];

        if($_SESSION['type_compte'] == 'défaut')
        {
            foreach ($tab as $valeur) {
            
                if($db_found)
                {
                    $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
                    $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
            
                    while ($data = mysqli_fetch_assoc($req))
                    {    
    
                        if($data['nom_fav'] == $valeur)
                        {
                            $sql = "SELECT date_publi,theme,auteur, lien_article, titre_article, description_article FROM infoarticle WHERE theme = '" . $data['nom_fav'] . "' LIMIT 1;";
                            $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
                    
                            while($data = mysqli_fetch_assoc($req))
                            {
                                $date_publi = $data['date_publi'];
                                $theme = $data['theme'];
                                $auteur = $data['auteur'];
                                $lien_article = $data['lien_article'];
                                $titre_article = $data['titre_article'];
                                $description_article = $data['description_article'];
    
                                echo "Date de publication : " . $date_publi . "</br>";
                                echo "Thème : " . $theme . "</br>";
                                echo "Auteur : " . $auteur . "</br>";
                                echo "Lien : " . $lien_article . "</br>";
                                echo "Titre : " . $titre_article . "</br>";
                                echo "Description : " . $description_article . "</br>";
                                echo "</br>";
                            } 
                        }
                    }  
                }echo "</br>";
            }
        }
        else
        {
            foreach ($tab as $valeur) {
            
                if($db_found)
                {
                    $sql = "SELECT nom_fav FROM favoris WHERE id_user = '" . $_SESSION['id_user'] . "';";
                    $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
            
                    while ($data = mysqli_fetch_assoc($req))
                    {    
    
                        if($data['nom_fav'] == $valeur)
                        {
                            $sql = "SELECT date_publi,theme,auteur, lien_article, titre_article, description_article FROM infoarticle WHERE theme = '" . $data['nom_fav'] . "'";
                            $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
                    
                            while($data = mysqli_fetch_assoc($req))
                            {
                                $date_publi = $data['date_publi'];
                                $theme = $data['theme'];
                                $auteur = $data['auteur'];
                                $lien_article = $data['lien_article'];
                                $titre_article = $data['titre_article'];
                                $description_article = $data['description_article'];
    
                                echo "Date de publication : " . $date_publi . "</br>";
                                echo "Thème : " . $theme . "</br>";
                                echo "Auteur : " . $auteur . "</br>";
                                echo "Lien : " . $lien_article . "</br>";
                                echo "Titre : " . $titre_article . "</br>";
                                echo "Description : " . $description_article . "</br>";
                                echo "</br>";
                            } 
                        }
                    }  
                }echo "</br>";
            }
        }
?>