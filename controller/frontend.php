<?php

require_once('../TIDAL/model/frontend.php');

function home()
{
    require_once('../TIDAL/view/frontend/home.php');
}

function info()
{
    require_once('../TIDAL/view/frontend/infos.php');
}

function pathologies()
{
    $list = getList();
    require_once('../TIDAL/view/frontend/pathologies.php');
}
function signup()
{
    require_once('../TIDAL/view/frontend/signup.php');
}

