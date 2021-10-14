<?php
define('SMARTY_DIR', '/home/web/Documents/TIDAL/public/smarty-3.1.39/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->debugging = true;


require_once('controller/frontend.php');

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
