<?php

require_once('/home/web/Documents/TIDAL/model/frontend.php');

function home()
{
    require_once('/home/web/Documents/TIDAL/view/frontend/home.php');
}

function info()
{
    require_once('/home/web/Documents/TIDAL/view/frontend/infos.php');
}

function pathologies()
{
    $data =getList();
    $datafiltremer =getFilterMeridien();
    $smarty = new Smarty();
    $smarty->assign('reqlist',$data);
    $smarty->assign('reqlistmer',$datafiltremer);
    
    //$smarty->display(realpath(dirname(__FILE__) . '/../view/frontend/template/pathologies.tpl'));
    require_once('/home/web/Documents/TIDAL/view/frontend/pathologies.php');
}
function signup()
{
    require_once('/home/web/Documents/TIDAL/view/frontend/signup.php');
}
function filtremer()
{
    $data=getListefilterMer();
    $datafiltremer =getFilterMeridien();
    $datafiltrepatho =getFilterPatho();
    $smarty = new Smarty();
    $smarty->assign('reqlist',$data);
    $smarty->assign('reqlistmer',$datafiltremer);
    $smarty->assign('reqlistpatho',$datafiltrepatho);
    require_once('/home/web/Documents/TIDAL/view/frontend/pathologies.php');
}
function filtrepatho()
{
    $data=getListefilterPatho();
    $datafiltremer =getFilterMeridien();
    $datafiltrepatho =getFilterPatho();
    $smarty = new Smarty();
    $smarty->assign('reqlist',$data);
    $smarty->assign('reqlistmer',$datafiltremer);
    $smarty->assign('reqlistpatho',$datafiltrepatho);
    require_once('/home/web/Documents/TIDAL/view/frontend/pathologies.php');
}