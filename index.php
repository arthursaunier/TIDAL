<?php
define('SMARTY_DIR', '/home/web/Documents/TIDAL/public/smarty-3.1.39/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
global $smarty;
$smarty = new Smarty();
//$smarty->debugging = true;

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
        } else if ($_GET['action'] == 'register') {
            //echo("salut");
            register1();
        } else {
            //no button pressed
        }

        break;
    case "GET":
        
        if(isset($_SESSION['user'])){
            $logo = "bi bi-person-check-fill";
            $smarty->assign('log_auth',$logo);
        } else {
            $logo = "bi bi-person";
            $smarty->assign('log_auth',$logo);
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
            elseif ($_GET['action'] == 'meridien'){
                
                filtremer();
            }
            elseif ($_GET['action'] == 'patho'){
                
                filtrepatho();
            }            
        } else {
            home();
        }
        break;
             
}

