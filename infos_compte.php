<?php

    session_start();    

    if(empty($_SESSION['nom']) OR empty($_SESSION['prenom']) OR empty($_SESSION['mail']) OR empty($_SESSION['password']))
    {
        echo "Veuillez vous enregistrer ou vous connecter à votre compte </br>";
        echo "<a href='http://localhost:3000/SAE/index.html'><button>Accueil</button></a></br>";

    }
    else
    {
        echo "Nom : <b>" . $_SESSION['nom'] . "</b><a href='http://localhost:3000/SAE/change_name.html'><button>Modifier le nom</button></a></br>";
        echo "Prénom : <b>" . $_SESSION['prenom'] . "</b><a href='http://localhost:3000/SAE/change_surname.html'><button>Modifier le prénom</button></a></br>";
        echo "Adresse mail <b>: " . $_SESSION['mail'] . "</b><a href='http://localhost:3000/SAE/change_mail.html'><button>Modifier le mail</button></a></br>";
        echo "Numéro de téléphone : <b>" . $_SESSION['numtel'] . "</b><a href='http://localhost:3000/SAE/change_tel.html'><button>Modifier le numéro de téléphone</button></a></br>";
        echo "Mot de passe : <b>" . $_SESSION['password'] . "</b><a href='http://localhost:3000/SAE/change_password.html'><button>Modifier le mot de passe</button></a></br>";    
    }
    
?>