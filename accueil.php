<?php
    session_start();

    echo "Bienvenue ". $_SESSION['nom'] . " " . $_SESSION['prenom'] . " ! </br>";
    echo "<a href='infos_compte.php'>Les informations de votre compte</a>"

?>