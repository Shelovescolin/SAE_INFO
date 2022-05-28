<?php

    session_start();    

    if(empty($_SESSION['nom']) OR empty($_SESSION['prenom']) OR empty($_SESSION['mail']) OR empty($_SESSION['password']))
    {
        echo "Veuillez vous enregistrer ou vous connecter à votre compte </br>";
        echo "<a href='http://localhost:3000/SAE/index.html'><button>Accueil</button></a></br>";

    }
    else
    {
        echo "Nom : <b>" . $_SESSION['nom'] . "</b></br>";
        echo "Prénom : <b>" . $_SESSION['prenom'] . "</b></br>";
        echo "Adresse mail <b>: " . $_SESSION['mail'] . "</b></br>";
        echo "Numéro de téléphone : <b>" . $_SESSION['numtel'] . "</b></br>";
        echo "Mot de passe : <b>" . $_SESSION['password'] . "</b></br>";  
        echo "<a href='http://localhost:3000/SAE/change_infos.html'><button>Modifier les infos de votre compte</button></a>";  
    }
    
?>