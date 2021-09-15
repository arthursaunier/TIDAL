<?php
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