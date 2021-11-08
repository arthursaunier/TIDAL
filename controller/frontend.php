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
    $list = getList();
}
function signup()
{
    require_once('/home/web/Documents/TIDAL/view/frontend/signup.php');
}

