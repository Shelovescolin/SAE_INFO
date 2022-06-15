<?php

    session_start();
    $loginOK = FALSE;

    require_once('config.php');
    include("test_input.php");

    $nom = $prenom = $mail = $numtel = $password = $cypherpass = "";

    $nom = isset($_POST["nom"])?$_POST["nom"]:"";
    $prenom =isset($_POST["prenom"])?$_POST["prenom"]:"";
    $password = isset($_POST["password"])?$_POST["password"]:"";

    if(empty($nom) OR empty($prenom) OR empty($password))
    {
        echo "<script>alert('Veuillez renseigner tous les champs')</script>";
        echo "<a href='http://localhost:3000/SAE_INFO/login.html'><button>Page de connexion</button></a>";
    }
    else
    {
        $nom = test_input($nom);
        $prenom = test_input($prenom);
        $password = test_input($password);
    
        include("test_pass_login.php");
        test_pass_login($nom, $prenom, $password);
    
        if($loginOK)
        {   
            if($db_found)
            {
                $sql = "SELECT mail,numtel FROM users WHERE nom = '" . $nom . "' AND prenom = '" . $prenom . "';";
                $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);
                while ($data = mysqli_fetch_assoc($req))
                {
                    $_SESSION['mail'] = $data['mail'];
                    $_SESSION['numtel'] = $data['numtel'];
                }  
    
            }else{echo "Database not found </br>";}
    
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['password'] = $password;
    
            header('Location: http://localhost:3000/SAE_INFO/accueil.php');
            exit();
        }
        else
        {
            echo "Erreur lors de la connexion à votre compte, veuillez réssayer ultrérieurement. </br>";
            echo "<a href='http://localhost:3000/SAE_INFO/login.html'><button>Page de connexion</button></a></br>";
        }
    }
?>