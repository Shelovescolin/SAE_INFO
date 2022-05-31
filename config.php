<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'Colin13-iris29');
    define('DB_NAME', 'SAE_INFO');
    
    $db_handle = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);
    $db_found = mysqli_select_db($db_handle, DB_NAME);
?>
