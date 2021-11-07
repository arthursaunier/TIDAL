<?php

require_once('./frontend.php');

switch($_SERVER["REQUEST_METHOD"]){
    case "POST" : 
        print_r($_POST);
        register();
        home();

        break;
    case "GET":
        login();
        pathologies();
        break;
             
}

function register(){
    include_once('../model/user.php');
    echo $_SERVER["REQUEST_METHOD"];
    $user = new User($_POST['email'], $_POST['password'], $_POST['prenom'], $_POST['nom']);
    
    $user->register();
    header("Location: ../index.php");
    
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
        header("Location: ../index.php");
    }
    
}
