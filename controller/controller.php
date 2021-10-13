<?php

//require('model.php');//php qui contient les fonctions get 

switch($_SERVER["REQUEST_METHOD"]){
    case "POST" : 
        print_r($_POST);
        //register();
        login();

        break;
    case "GET":
        //signup();
        home();
        break;
             
}

function home()
{
    //$posts = getPosts();
    //$comments = getComments($_GET['id']);
    require('../view/frontend/Home.php');
}

function register(){
    include_once('../model/user.php');
    echo $_SERVER["REQUEST_METHOD"];
    $user = new User($_POST['email'], $_POST['password'], $_POST['prenom'], $_POST['nom']);
    
    $user->register();
    header("Location: ../view/index.php");
    
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
        header("Location: ../view/index.php");
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

    require('../view/frontend/Signup.html');
}