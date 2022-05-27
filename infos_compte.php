<?php

    session_start();    

    echo "Nom : <b>" . $_SESSION['nom'] . "</b><a href='http://localhost:3000/SAE/change_name.php'><button>Modifier le nom</button></a></br>";
    echo "Prénom : <b>" . $_SESSION['prenom'] . "</b></br>";
    echo "Adresse mail <b>: " . $_SESSION['mail'] . "</b></br>";
    echo "Numéro de téléphone : <b>" . $_SESSION['numtel'] . "</b></br>";
    echo "Mot de passe : <b>" . $_SESSION['password'] . "</b></br>";

?>