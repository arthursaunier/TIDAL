<?php
function register(){
    require_once('../model/user.php');
    echo $_SERVER["REQUEST_METHOD"];
    $user = new User($_POST['email'], $_POST['password'], $_POST['prenom'], $_POST['nom']);
    $user->register();
    header("Location: ../index.php");
    
}

function login(){
    require_once('/home/web/Documents/TIDAL/model/user.php');
    $user = new User($_POST['email'], $_POST['password']);
    
    $user = $user->login();
    if(!$user){
        header("Location: ../index.php");
        //echo "<script type=\"text/javascript\">".
        //"alert('Email ou mdp incorrect');".
        //"</script>";

    }else{
        session_start();
        $_SESSION['user'] = $user;
        header("Location: ../index.php");
    }

    
}
