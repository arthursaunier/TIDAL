<?php

function getList()
{
    $conn = dbConnect();
    $req = $conn->query('SELECT S.desc symptome, TabI.desc patho, TabI.nom meridien 
    FROM symptome AS S
    INNER JOIN 
    (SELECT SP.idS, P.desc, M.nom
    FROM SymptPatho AS SP
    INNER JOIN patho AS P ON P.idP = SP.idP 
    INNER JOIN meridien AS M ON M.code = P.mer) TabI ON TabI.idS = S.idS');
    $num_results = $req->rowCount();
    for ($i ; $i<$num_results ; $i++){
        $rows[] = $req->fetch_assoc(); 
    }
    $smarty->assign('rows',$rows);
    return $rows;
}

function getFilterPatho()
{
    $conn = dbConnect();
    $req = $conn->query('SELECT P.desc AS pathologie FROM patho AS P');
    $num_results = $req->rowCount();
    for ($i ; $i<$num_results ; $i++){
        $rowspatho[] = $req->fetch_assoc(); 
    }
    $smarty->assign('rowspatho',$rowspatho);
    return $rowspatho;
}

function getFilterMeridien()
{
    $conn = dbConnect();
    $req = $conn->query('SELECT M.nom AS meridien FROM meridien AS M');
    $num_results = $req->rowCount();
    for ($i ; $i<$num_results ; $i++){
        $rowsmer[] = $req->fetch_assoc(); 
    }
    $smarty->assign('rowsmer',$rowsmer);
    return $rowsmer;
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