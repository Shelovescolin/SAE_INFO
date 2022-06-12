<meta charset="utf-8"/>
<?php

    require_once('config.php');
    include('test_input.php');
    require_once('recup_id_current_user.php');

    if(isset($_GET['id']) AND !empty($_GET['id']))
    {

        if(isset($_POST['submit_com']))
        {
            if(isset($_POST['pseudo']) AND isset($_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire']))
            {
                $pseudo = test_input($_POST['pseudo']);
                $commentaire = test_input($_POST['commentaire']);

                if(strlen($pseudo) < 25)
                {
                    if($db_found)
                    {
                        $sql = "INSERT INTO commentaire(comm,pseudo,id_user) VALUES ('" . $commentaire . "','" . $pseudo . "','" . $_SESSION['id_user'] . "');";
                        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
                        $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span></br>";

                    }else{echo "Database not found";}
                }else{$c_msg = "Erreur : votre pseudo fait + de 25 char";}
            }
            else
            {
                $c_msg = "Tous les champs doivent être complétés !"; 
            }
        }

?>

<h2>Commentaires : </h2>
<form method="POST">
    <input type="text" name="pseudo" placeholder="Votre pseudo"/></br>
    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea></br>
    <input type="submit" value="Poster votre commentaire" name="submit_com"/>
</form>
<?php 
if(isset($c_msg))
{
    echo $c_msg;
} 
?>
<?php
    if($db_found)
    {
        $sql = "SELECT * FROM commentaire;";
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            $comm = $data['comm'];
            $pseudo = $data['pseudo'];
            echo $pseudo . " : " . $comm . "</br></br>";
        } 
    }
    echo "<a href='http://localhost:3000/SAE_INFO/accueil.php'><button>Retour</button></a>";

?>

<?php
}
?>