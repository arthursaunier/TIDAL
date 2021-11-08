<?php


function getList()
{
    $smarty = new Smarty();
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
    
    print_r($data);
    $smarty->assign('reqlist',$data);
    $smarty->display(realpath(dirname(__FILE__) . '/template/pathologies.tpl'));
}

function getFilterPatho()
{
    $smarty = new Smarty();
    $i=0;
    $conn = dbConnect();
    $req = $conn->query('SELECT P.desc AS pathologie FROM patho AS P');

    $smarty->assign('reqfiltre',$req);
    
}

function getFilterMeridien()
{
    $smarty = new Smarty();
    $i=0;
    $conn = dbConnect();
    $req = $conn->query('SELECT M.nom AS meridien FROM meridien AS M');
    $smarty->assign('reqmer',$req);
    
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