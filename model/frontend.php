<?php

function getList()
{
    $i=0;
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
        $rows[] = $req->fetch(PDO::FETCH_ASSOC); 
    }
    $smarty->assign('rows',$rows,global);
    return $rows;
}

function getFilterPatho()
{
    $i=0;
    $conn = dbConnect();
    $req = $conn->query('SELECT P.desc AS pathologie FROM patho AS P');
    $num_results = $req->rowCount();
    for ($i ; $i<$num_results ; $i++){
        $rowspatho[] = $req->fetch(PDO::FETCH_ASSOC); 
    }
    $smarty->assign('rowspatho',$rowspatho,global);
    return $rowspatho;
}

function getFilterMeridien()
{
    $i=0;
    $conn = dbConnect();
    $req = $conn->query('SELECT M.nom AS meridien FROM meridien AS M');
    $num_results = $req->rowCount();
    for ($i ; $i<$num_results ; $i++){
        $rowsmer[] = $req->fetch(PDO::FETCH_ASSOC); 
    }
    $smarty->assign('rowsmer',$rowsmer,global);
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