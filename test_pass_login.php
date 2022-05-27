<?php

function test_pass_login($nom, $prenom, $password)
{
    global $nom, $prenom, $password, $cypherpass, $loginOK;

    $server = "localhost";
    $user = "root";
    $pass = "Colin13-iris29";
    $DB = "SAE_INFO";

    $db_handle = new mysqli($server, $user, $pass);
    $db_found = mysqli_select_db($db_handle, $DB);

    if($db_found)
    {
        $sql = "SELECT password FROM users WHERE nom = '" . $nom . "' AND prenom = '" . $prenom . "';";
        echo $sql;
        $req = mysqli_query($db_handle, $sql) or die("Erreur SQL: </br>" . $sql);

        while ($data = mysqli_fetch_assoc($req))
        {
            $cypherpass = $data['password'];
        }  
    }

    $test_password = password_verify($password,$cypherpass);
    if($test_password)
    {
       $loginOK = TRUE;
       return $loginOK;
    }
    mysql_close($db_handle); 
}
?>