<?php

    session_start();
    $loginOK = FALSE;

    $nom = $prenom = $password = $cypherpass = "";

    $nom =isset($_POST["nom"])?$_POST["nom"]:"";
    $prenom =isset($_POST["prenom"])?$_POST["prenom"]:"";
    $password = isset($_POST["password"])?$_POST["password"]:"";

    if(empty($nom) OR empty($prenom) OR empty($password))
    {
        echo "<script>alert('Veuillez renseigner tous les champs')</script>";
        echo "<a href='http://localhost:3000/SAE/login.html'><button>Page de connexion</button></a>";
    }

    include("test_input.php");

    $nom = test_input($nom);
    $prenom = test_input($prenom);
    $password = test_input($password);

    include("test_pass_login.php");
    test_pass_login($nom, $prenom, $password);

    if($loginOK)
    {   
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['password'] = $password;

        header('Location: http://localhost:3000/SAE/index.html');
        exit();
    }
    else
    {
        echo "Erreur lors de la création de votre compte, veuillez réssayer ultrérieurement.";
        echo "<a href='http://localhost:3000/SAE/login.html'><button>Page de connexion</button></a>";
    }
?>