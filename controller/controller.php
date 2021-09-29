<?php

//require('model.php');//php qui contient les fonctions get 

function home()
{
    //$posts = getPosts();
    //$comments = getComments($_GET['id']);
    require('../view/frontend/home.php');
}

function info()
{
    require('../view/frontend/info.php');
}

function pathologies()
{

    require('../view/frontend/pathologies.php');
}
function signup()
{

    require('../view/frontend/signup.php');
}