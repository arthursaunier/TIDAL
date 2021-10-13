<?php
include_once('controller/frontend.php');

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
