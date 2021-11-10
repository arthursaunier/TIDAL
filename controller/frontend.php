<?php

require_once('/home/web/Documents/TIDAL/model/frontend.php');

function home()
{
    $smarty = new Smarty();
    require_once('/home/web/Documents/TIDAL/view/frontend/home.php');
}

function info()
{
    $smarty = new Smarty();
    require_once('/home/web/Documents/TIDAL/view/frontend/infos.php');
}

function pathologies()
{
    $data =getList();
    $smarty = new Smarty();
    $smarty->assign('reqlist',$data);
    
    //$smarty->display(realpath(dirname(__FILE__) . '/../view/frontend/template/pathologies.tpl'));
    require_once('/home/web/Documents/TIDAL/view/frontend/pathologies.php');
}
function signup()
{
    $smarty = new Smarty();
    require_once('/home/web/Documents/TIDAL/view/frontend/signup.php');
}

