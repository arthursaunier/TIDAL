<?php

//require('model.php');//php qui contient les fonctions get 

function home()
{
    //$posts = getPosts();
    //$comments = getComments($_GET['id']);
    require('Home.php');
}

function register(){
    include_once('../model/user.php');
    echo $_SERVER["REQUEST_METHOD"];
    $user = new User($_POST['email'], $_POST['password']);
    
    $user->register();
    
}

function login(){
    include_once('../model/user.php');
    $user = new User($_POST['email'], $_POST['password']);
    $user = $user->login();
    if(!$user){
        echo("mdp ou email incorrect");
    }else{
        session_start();
        $_SESSION['user'] = $user;
        print_r($user);
        //header("Location: ./index.php");
    }
    
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