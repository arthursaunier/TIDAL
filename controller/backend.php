<?php

require_once('frontend.php');

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
