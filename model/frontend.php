<?php


function getList()
{
    $smarty = new Smarty();
    $i=0;
    $conn = dbConnect();
    $req = $conn->prepare('SELECT S.desc symptome, TabI.desc patho, TabI.nom meridien 
    FROM symptome AS S
    INNER JOIN 
    (SELECT SP.idS, P.desc, M.nom
    FROM SymptPatho AS SP
    INNER JOIN patho AS P ON P.idP = SP.idP 
    INNER JOIN meridien AS M ON M.code = P.mer) TabI ON TabI.idS = S.idS');
    while($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
    
        // If you want to display the results one by one
        echo $row['column1'];
        echo $row['column2']; // etc..
    
    }
    $smarty->assign('reqlist',$row);
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