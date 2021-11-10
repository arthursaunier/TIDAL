<?php
function register(){
    include_once('../model/user.php');
    echo $_SERVER["REQUEST_METHOD"];
    $user = new User($_POST['email'], $_POST['password'], $_POST['prenom'], $_POST['nom']);
    
    $user->register();
    header("Location: ../index.php");
    
}

function login(){
    include_once('/home/web/Documents/TIDAL/model/user.php');
    $user = new User($_POST['email'], $_POST['password']);
    
    $user = $user->login();
    if(!$user){
        echo "<script type=\"text/javascript\">".
        "alert('Email ou mdp incorrect');".
        "</script>";
    }else{
        session_start();
        $_SESSION['user'] = $user;
        print_r($user);
        header("Location: ../index.php");
    }

    
}
