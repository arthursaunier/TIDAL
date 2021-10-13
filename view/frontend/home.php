<?php
define('SMARTY_DIR', '/home/web/TIDAL/public/smarty-3.1.39/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

$smarty->display('template/home.tpl');
