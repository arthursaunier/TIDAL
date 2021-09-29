<?php

//require('model.php');//php qui contient les fonctions get 

function home()
{
    //$posts = getPosts();
    //$comments = getComments($_GET['id']);
    require('Home.php');
}

function info()
{
    require('Info.php');
}

function pathologies()
{

    require('Pathologies.php');
}
function signup()
{

    require('Signup.php');
}