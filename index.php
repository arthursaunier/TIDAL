<?php
define('SMARTY_DIR', '/home/web/Documents/TIDAL/public/smarty-3.1.39/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
global $smarty;
$smarty = new Smarty();
$smarty->debugging = true;

session_start();

require_once('controller/frontend.php');
include_once('controller/backend.php');
switch($_SERVER["REQUEST_METHOD"]){
    case "POST" :
        if (isset($_POST['con'])) {
            //print_r($_POST);
            login();
        } else if (isset($_POST['inscrip'])) {
            signup();
        } else if ($_POST['action'] == 'register') {
            register();
        } else {
            //no button pressed
        }

        break;
    case "GET":
        
        if(isset($_SESSION['user'])){
            echo '<h1>tes co fdp</h1>';
        } 
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'home') {
                home();
            } elseif ($_GET['action'] == 'info') {
                info();
            } elseif ($_GET['action'] == 'pathologie') {
                pathologies();
            } elseif ($_GET['action'] == 'signup') {
                signup();
            }
        } else {
            home();
        }
        break;
             
}

