<?php
try
{
    $pdo = new PDO('mysql:host=DBHOST;dbname=DBNAME;charset=UTF8', 'root', '');
}
catch(Exception $e)
{
    echo 'Echec de la connexion à la base de données';
    exit();
}

?>