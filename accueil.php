<?php
    session_start();

    echo "Bienvenue ". $_SESSION['nom'] . " " . $_SESSION['prenom'] . " ! </br>";
    echo "<a href='infos_compte.php'>Les informations de votre compte</a></br>";
    echo "<a href='fav_chose.html'>Ajoutez des thèmes favoris</a></br>";
    echo "<a href='mes_favoris.php'>Vos favoris</a></br>";
    echo "<a href='articles.php'>Articles</a></br>";
    echo "<a href='http://localhost:3000/SAE_INFO/commentaire.php?id=1'>Espace commentaire</a></br>";
    echo "<a href='http://localhost:3000/SAE_INFO/index.html'><button>Retour</button></a>";

    if($_SESSION['type_compte'] = "défaut")
    {
        echo "<a href='http://localhost:3000/SAE_INFO/premium_account.php'><button>Devenir membre premium</button></a>";
    }
    
?>