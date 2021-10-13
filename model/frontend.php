<?php

function getList()
{
    $conn = dbConnect();
    $req = $conn->query('');
    $num_results = $req->num_rows;
    for ($i ; $i<$num_results ; $i++){
        $rows[] = $result->fetch_assoc(); 
    }
    $smarty->assign('rows',$rows);
    return $rows;
}

function dbConnect()
{
    $host = 'localhost';
    $dbname = 'acudb';
    $username = 'postgres-web';
    $password = 'web';

    try {
        $conn = new PDO("pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password");
        return $conn;
    } catch (Exception $e) {
        echo "Non Connecté";
        echo $e->getCode() . ' ' . $e->getMessage();
    }

    //$page = 'localhost';
}