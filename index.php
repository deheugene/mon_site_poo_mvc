<?php

require 'lib/autoload.php';

$globalCtrl = new GlobalController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        $globalCtrl->showView("login");
    } elseif ($_GET['action'] == 'register') {
        $globalCtrl->showView("register");
    } elseif ($_GET['action'] == 'personnages') {
        $globalCtrl->showView("personnages");
    }elseif ($_GET['action'] == 'articles') {
        $globalCtrl->showView("articles");
    }elseif ($_GET['action'] == 'monuments') {
        $globalCtrl->showView("monuments");
    }elseif ($_GET['action'] == 'vestiges') {
        $globalCtrl->showView("vestiges");
    }elseif ($_GET['action'] == 'contact') {
        $globalCtrl->showView("contact");
    }else {
        require('errors/404.php');
    }
} else {
    $globalCtrl->showView("index");
}
?>

