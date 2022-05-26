<?php

    session_start();
    $registerOK = FALSE;

    
    $nom = $prenom = $mail = $num_tel = $password1 = $password2 = "";

    $nom = isset($_POST["nom"]) ? $_POST["nom"] :"";
    $prenom =isset($_POST["prenom"])?$_POST["prenom"]:"";
    $mail=isset($_POST["mail"])?$_POST["mail"]:"";
    $num_tel= isset($_POST["num_tel"])?$_POST["num_tel"]:"";
    $password1= isset($_POST["password1"])?$_POST["password1"]:"";
    $password2= isset($_POST["password2"])?$_POST["password2"]:"";

    if(empty($nom) OR empty($prenom) OR empty($mail) OR empty($num_tel) OR empty($password1) OR empty($password2))
    {
        echo "<script>alert('Veuillez renseigner tous les champs')</script>";
        echo "<a href='http://localhost:3000/SAE/register.html'><button>Page d'enregistrement</button></a>";
    }

    include("test_input.php");

    $nom = test_input($nom);
    $prenom = test_input($prenom);
    $mail= test_input($mail);
    $num_tel = test_input($num_tel);
    $password1 = test_input($password1);
    $password2 = test_input($password2);

    include("test_passwd.php");
    test_pass($password1, $password2);

    $cypher_pass = password_hash($password, PASSWORD_DEFAULT);

    if($registerOK)
    {   
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['mail'] = $mail;
        $_SESSION['num_tel'] = $num_tel;
        $_SESSION['password'] = $password;


        header('Location: http://localhost:3000/SAE/ajout_infos_register.php');
        exit();
    }
    else
    {
        echo "Erreur lors de la création de votre compte, veuillez réssayer ultrérieurement.";
        echo "<a href='http://localhost:3000/SAE/register.html'><button>Page d'enregistrement</button></a>";
    }

?>