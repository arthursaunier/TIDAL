<?php

$host = 'localhost';
$dbname = 'acudb';
$username = 'postgres-web';
$password = 'web';

try {
    $conn = new PDO("pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password");
} catch (Exception $e) {
    echo "Non Connecté";
    echo $e->getCode() . ' ' . $e->getMessage();
}

//$page = 'localhost';
