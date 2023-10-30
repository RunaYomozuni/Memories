<?php
function connectToDbAndGetPdo()
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = "PowerOfMemory";

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        echo 'échec de la connection <br>';
        die('Erreur : ' . $connection->connect_error);
    }
    //ON RENVOIE LA CONNECTION
    return $connection;
}
?>