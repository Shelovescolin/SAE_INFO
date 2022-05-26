<?php

    session_start();
    $loginOK = FALSE;

    
    $nom = $prenom = $password = "";

    $nom =isset($_POST["nom"])?$_POST["nom"]:"";
    $prenom =isset($_POST["prenom"])?$_POST["prenom"]:"";
    $password= isset($_POST["password"])?$_POST["password"]:"";

    if(empty($nom) OR empty($password))
    {
        echo "<script>alert('Veuillez renseigner tous les champs')</script>";
        echo "<a href='http://localhost:3000/SAE/register.html'><button>Page d'enregistrement</button></a>";
    }

    include("test_input.php");

    $nom = test_input($nom);
    $prenom = test_input($prenom);
    $password = test_input($password);

    include("test_passwd.php");
    test_pass($password1, $password2);

    $cypher_pass = password_hash($password, PASSWORD_DEFAULT);

    if($registerOK)
    {   
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['mail'] = $mail;
        $_SESSION['num_tel'] = $num_tel;
        $_SESSION['cypherpass'] = $cypher_pass;


        header('Location: http://localhost:3000/SAE/ajout_infos_register.php');
        exit();
    }
    else
    {
        echo "Erreur lors de la création de votre compte, veuillez réssayer ultrérieurement.";
        echo "<a href='http://localhost:3000/SAE/register.html'><button>Page d'enregistrement</button></a>";
    }

?>