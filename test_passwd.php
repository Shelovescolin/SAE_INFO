<?php

function test_pass($password1, $password2)
{
    global $password, $registerOK;

    if($password1 != $password2)
    {
        echo "<script>alert('Mots de passe différents')</script>";
        echo "<a href='http://localhost:3000/SAE/register.html'><button>Page d'enregistrement</button></a>";
    }
    else
    {
        $password = $password1;
        $registerOK = TRUE;
    }
}
?>