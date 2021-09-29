
<?php
define('SMARTY_DIR', '/home/web/TIDAL/smarty-3.1.39/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

$host = 'localhost';
$dbname = 'acudb';
$username = 'postgres-web';
$password = 'web';
   
  try{
        $conn = new PDO("pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password");
     
        if($conn){
          require('controller.php');

          if (isset($_GET['action'])) {
              if ($_GET['action'] == 'Home') {
                  home();
              }
              elseif ($_GET['action'] == 'Infos') {
                  info();
              }
              elseif ($_GET['action'] == 'Pathologies') {
                  pathologies();
              }
              elseif ($_GET['action'] == 'Signup') {
                  signup();
              }
          }
          else {
              home();
          }
          
        }
    }catch (Exception $e) {
        echo "Non Connecté";
        echo $e->getCode() . ' ' . $e->getMessage();
    }

$page = 'localhost';

