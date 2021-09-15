<?php

//require('model.php');//php qui contient les fonctions get 

function home()
{
    //$posts = getPosts();
    //$comments = getComments($_GET['id']);
    require('Home.html');
}

function info()
{
    require('Infos.html');
}

function pathologies()
{

    require('Pathologies.html');
}
function signup()
{

    require('Signup.html');
}