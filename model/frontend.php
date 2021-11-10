<?php


function getList()
{
    
    $i=0;
    $data=[];
    $conn = dbConnect();
    $req = $conn->prepare('SELECT S.desc symptome, TabI.desc patho, TabI.nom meridien 
    FROM symptome AS S
    INNER JOIN 
    (SELECT SP.idS, P.desc, M.nom
    FROM SymptPatho AS SP
    INNER JOIN patho AS P ON P.idP = SP.idP 
    INNER JOIN meridien AS M ON M.code = P.mer) TabI ON TabI.idS = S.idS');
    $req->execute();
    while($elem=$req->fetch(PDO::FETCH_ASSOC)){
        array_push($data, $elem);
    }

    return $data;
}

function getFilterPatho()
{
    
    $i=0;
    $data=[];
    $conn = dbConnect();
    $req = $conn->query('SELECT P.desc AS pathologie FROM patho AS P');

    $smarty->assign('reqfiltre',$req);
    
}

function getFilterMeridien()
{
    $data=[];
    $i=0;
    $conn = dbConnect();
    $req = $conn->query('SELECT M.nom AS meridien FROM meridien AS M');
    $req->execute();
    while($elem=$req->fetch(PDO::FETCH_ASSOC)){
        array_push($data, $elem);
    }

    return $data;
    
}

function getListefilterMer()
{
    
    $i=0;
    $data=[];
    $conn = dbConnect();
    $mer=$_GET['meridien'];
    print_r($mer);
    $req = $conn->prepare('SELECT S.desc symptome, TabI.desc patho, TabI.nom meridien 
    FROM symptome AS S
    INNER JOIN 
    (SELECT SP.idS, P.desc, M.nom
    FROM SymptPatho AS SP
    INNER JOIN patho AS P ON P.idP = SP.idP 
    INNER JOIN meridien AS M ON M.code = P.mer) TabI ON TabI.idS = S.idS WHERE meridien = \''.$mer.'\'');
    $req->execute();
    
    while($elem=$req->fetch(PDO::FETCH_ASSOC)){
        array_push($data, $elem);
    }
    print_r($data);
    
    return $data;
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