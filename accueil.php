<?php
    session_start();

    echo "Bienvenue ". $_SESSION['nom'] . " " . $_SESSION['prenom'] . " ! </br>";
    echo "<a href='infos_compte.php'>Les informations de votre compte</a></br>";
    echo "<a href='fav_chose.html'>Ajoutez des thèmes favoris</a></br>";
    echo "<a href='mes_favoris.php'>Vos favoris</a></br>";
    echo "<a href='articles.php'>Articles</a></br>";
    echo "<a href='http://localhost:3000/SAE/premium_account.php'><button>Devenir membre premium</button></a>";
    echo "<a href='http://localhost:3000/SAE/index.html'><button>Retour</button></a>";

    
?>